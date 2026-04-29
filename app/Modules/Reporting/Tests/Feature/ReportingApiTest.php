<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Modules\Auth\Infrastructure\Models\Role;
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
