<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Modules\Auth\Infrastructure\Models\Role;
use Modules\Dispatch\Infrastructure\Models\DispatchOrder;
use Modules\Inventory\Infrastructure\Models\Location;
use Modules\Inventory\Infrastructure\Models\Lot;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;
use Modules\Reporting\Infrastructure\Models\InventoryMetric;

uses(RefreshDatabase::class);

function actingAsReportingManager(): void
{
    $role = Role::query()->firstOrCreate(['name' => 'warehouse_manager'], ['description' => 'Gestión de almacén']);
    $user = User::factory()->create();
    $user->roles()->sync([$role->id]);
    Sanctum::actingAs($user);
}

it('actualiza tabla materializada inventory_metrics al ajustar stock', function (): void {
    actingAsReportingManager();

    $product = Product::factory()->create([
        'reorder_point' => 10,
    ]);

    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 2,
    ]);

    $this->patchJson("/api/v1/inventory/products/{$product->id}/stock", [
        'quantity' => 5,
        'operation' => 'add',
        'reason' => 'Ajuste por recepción',
    ])->assertOk();

    $metric = InventoryMetric::query()->where('product_id', $product->id)->first();

    expect($metric)->not->toBeNull()
        ->and($metric->current_stock)->toBe(7)
        ->and($metric->stock_gap)->toBe(-3);
});

it('retorna métricas y resumen en endpoints de reporting', function (): void {
    actingAsReportingManager();

    $product = Product::factory()->create([
        'reorder_point' => 8,
    ]);

    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 8,
    ]);

    $this->patchJson("/api/v1/inventory/products/{$product->id}/stock", [
        'quantity' => 1,
        'operation' => 'add',
        'reason' => 'Ajuste mínimo',
    ])->assertOk();

    $this->getJson('/api/v1/reporting/inventory-metrics')
        ->assertOk()
        ->assertJsonCount(1, 'data');

    $this->getJson('/api/v1/reporting/summary')
        ->assertOk()
        ->assertJsonStructure([
            'data' => ['service_level', 'warehouse_utilization', 'inventory_rotation_proxy'],
            'meta',
        ]);
});

it('exporta métricas en pdf y excel', function (): void {
    actingAsReportingManager();

    $product = Product::factory()->create([
        'reorder_point' => 5,
    ]);

    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 10,
    ]);

    $this->patchJson("/api/v1/inventory/products/{$product->id}/stock", [
        'quantity' => 1,
        'operation' => 'add',
        'reason' => 'Trigger métricas exportables',
    ])->assertOk();

    $pdfResponse = $this->get('/api/v1/reporting/inventory-metrics/export/pdf');
    $pdfResponse->assertOk();
    expect($pdfResponse->headers->get('content-type'))->toContain('application/pdf');

    $excelResponse = $this->get('/api/v1/reporting/inventory-metrics/export/excel');
    $excelResponse->assertOk();
    expect($excelResponse->headers->get('content-type'))->toContain('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
});

it('retorna alertas operativas de vencimiento, stock bajo y pedidos pendientes', function (): void {
    actingAsReportingManager();

    $product = Product::factory()->create([
        'reorder_point' => 7,
    ]);
    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 5,
    ]);

    Lot::query()->create([
        'product_id' => $product->id,
        'location_id' => null,
        'lot_number' => 'ALRT-LOT-001',
        'expires_at' => now()->addDays(5)->toDateString(),
        'quantity' => 4,
    ]);

    DispatchOrder::query()->create([
        'order_reference' => 'ALRT-ORD-001',
        'client_name' => 'Cliente Alertas',
        'product_id' => $product->id,
        'quantity' => 2,
        'status' => 'pending',
        'expected_dispatch_at' => now()->subHour(),
    ]);

    $response = $this->getJson('/api/v1/reporting/alerts');
    $response->assertOk()->assertJsonStructure([
        'data' => [
            'expiring_soon',
            'below_reorder_point',
            'pending_dispatch',
            'overdue_dispatch',
        ],
        'meta',
    ]);

    expect($response->json('data.expiring_soon'))->not->toBeEmpty()
        ->and($response->json('data.below_reorder_point'))->not->toBeEmpty()
        ->and($response->json('data.pending_dispatch'))->not->toBeEmpty()
        ->and($response->json('data.overdue_dispatch'))->not->toBeEmpty();
});

it('retorna utilización de almacén por ubicación', function (): void {
    actingAsReportingManager();

    $product = Product::factory()->create();
    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 20,
    ]);

    $location = Location::query()->create([
        'code' => 'UTIL-01',
        'name' => 'Zona Utilización 01',
    ]);

    Lot::query()->create([
        'product_id' => $product->id,
        'location_id' => $location->id,
        'lot_number' => 'UTIL-LOT-01',
        'expires_at' => now()->addDays(20)->toDateString(),
        'quantity' => 15,
    ]);

    $response = $this->getJson('/api/v1/reporting/warehouse-utilization');
    $response->assertOk()
        ->assertJsonCount(1, 'data')
        ->assertJsonPath('data.0.location_code', 'UTIL-01')
        ->assertJsonPath('data.0.used_capacity_units', 15);
});

it('retorna nivel de servicio con filtros por periodo, categoría y zona', function (): void {
    actingAsReportingManager();

    $product = Product::factory()->create([
        'category' => 'Alimentos',
    ]);
    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 30,
    ]);

    $location = Location::query()->create([
        'code' => 'Z-A1',
        'name' => 'Zona A1',
    ]);

    Lot::query()->create([
        'product_id' => $product->id,
        'location_id' => $location->id,
        'lot_number' => 'SL-LOT-01',
        'expires_at' => now()->addDays(40)->toDateString(),
        'quantity' => 20,
    ]);

    $order = DispatchOrder::query()->create([
        'order_reference' => 'SL-ORD-001',
        'product_id' => $product->id,
        'quantity' => 5,
        'status' => 'confirmed',
        'expected_dispatch_at' => now()->addDay(),
        'confirmed_at' => now(),
    ]);

    $order->picks()->create([
        'inventory_lot_id' => Lot::query()->firstOrFail()->id,
        'picked_quantity' => 5,
    ]);

    $response = $this->getJson('/api/v1/reporting/service-level?from='.now()->subDay()->toDateString().'&to='.now()->addDay()->toDateString().'&category=Alimentos&zone=Z-A');
    $response->assertOk()
        ->assertJsonPath('data.total_confirmed_orders', 1)
        ->assertJsonPath('data.complete_orders', 1)
        ->assertJsonPath('data.on_time_orders', 1)
        ->assertJsonPath('data.service_level_percent', 100);
});

it('retorna rotación por categoría con tendencia básica', function (): void {
    actingAsReportingManager();

    $foodA = Product::factory()->create([
        'category' => 'Alimentos',
        'reorder_point' => 10,
    ]);
    $foodB = Product::factory()->create([
        'category' => 'Alimentos',
        'reorder_point' => 3,
    ]);

    StockLevel::query()->create(['product_id' => $foodA->id, 'quantity' => 4]);
    StockLevel::query()->create(['product_id' => $foodB->id, 'quantity' => 8]);

    $response = $this->getJson('/api/v1/reporting/inventory-rotation');
    $response->assertOk()->assertJsonStructure([
        'data',
        'meta',
    ]);

    $foodRow = collect($response->json('data'))
        ->first(fn (array $row): bool => $row['category'] === 'Alimentos');

    expect($foodRow)->not->toBeNull();
    expect($foodRow['total_products'])->toBe(2);
});

it('retorna exactitud de inventario y aplica filtros en exportación', function (): void {
    actingAsReportingManager();

    $product = Product::factory()->create([
        'category' => 'Higiene',
    ]);
    $location = Location::query()->create([
        'code' => 'Z-H1',
        'name' => 'Zona Higiene',
    ]);
    Lot::query()->create([
        'product_id' => $product->id,
        'location_id' => $location->id,
        'lot_number' => 'ACC-LOT-01',
        'expires_at' => now()->addDays(30)->toDateString(),
        'quantity' => 12,
    ]);
    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 12,
    ]);

    $this->patchJson("/api/v1/inventory/products/{$product->id}/stock", [
        'quantity' => 1,
        'operation' => 'add',
        'reason' => 'trigger métricas',
    ])->assertOk();

    $this->getJson('/api/v1/reporting/accuracy')
        ->assertOk()
        ->assertJsonStructure([
            'data' => ['total_products_evaluated', 'accurate_products', 'accuracy_percent'],
            'meta',
        ]);

    $pdf = $this->get('/api/v1/reporting/inventory-metrics/export/pdf?category=Higiene&zone=Z-H&from='.now()->subDay()->toDateString().'&to='.now()->addDay()->toDateString());
    $pdf->assertOk();

    $excel = $this->get('/api/v1/reporting/inventory-metrics/export/excel?category=Higiene&zone=Z-H&from='.now()->subDay()->toDateString().'&to='.now()->addDay()->toDateString());
    $excel->assertOk();
});
