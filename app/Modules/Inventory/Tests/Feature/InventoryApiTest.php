<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Modules\Auth\Infrastructure\Models\Role;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;

uses(RefreshDatabase::class);

function actingAsInventoryManager(): void
{
    $role = Role::query()->firstOrCreate(['name' => 'warehouse_manager'], ['description' => 'Gestión de almacén']);
    $user = User::factory()->create();
    $user->roles()->sync([$role->id]);
    Sanctum::actingAs($user);
}

it('registra un producto con stock inicial en cero', function (): void {
    actingAsInventoryManager();

    $response = $this->postJson('/api/v1/inventory/products', [
        'name' => 'Arroz Integral 1kg',
        'sku' => 'SKU-ARROZ-01',
        'reorder_point' => 10,
    ]);

    $response->assertCreated()
        ->assertJsonPath('data.sku', 'SKU-ARROZ-01')
        ->assertJsonPath('data.stock.quantity', 0);
});

it('ajusta stock sumando unidades', function (): void {
    actingAsInventoryManager();

    $product = Product::factory()->create([
        'reorder_point' => 5,
    ]);

    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 2,
    ]);

    $response = $this->patchJson("/api/v1/inventory/products/{$product->id}/stock", [
        'quantity' => 8,
        'operation' => 'add',
        'reason' => 'Recepción de mercancía',
    ]);

    $response->assertOk()
        ->assertJsonPath('data.stock.quantity', 10);
});

it('lista productos por debajo del punto de reorden', function (): void {
    actingAsInventoryManager();

    $low = Product::factory()->create(['reorder_point' => 10]);
    StockLevel::query()->create(['product_id' => $low->id, 'quantity' => 7]);

    $high = Product::factory()->create(['reorder_point' => 10]);
    StockLevel::query()->create(['product_id' => $high->id, 'quantity' => 15]);

    $response = $this->getJson('/api/v1/inventory/products/below-reorder-point');

    $response->assertOk();
    expect(collect($response->json('data'))->pluck('id')->all())->toContain($low->id)->not->toContain($high->id);
});

it('rechaza acceso cuando el rol no está autorizado', function (): void {
    $role = Role::query()->firstOrCreate(['name' => 'receiving_operator'], ['description' => 'Operación de recepción']);
    $user = User::factory()->create();
    $user->roles()->sync([$role->id]);
    Sanctum::actingAs($user);

    $response = $this->getJson('/api/v1/inventory/products');

    $response->assertForbidden()
        ->assertJsonPath('code', 'AUTH_FORBIDDEN');
});

it('retorna formato unificado para errores de validación', function (): void {
    actingAsInventoryManager();

    $response = $this->postJson('/api/v1/inventory/products', [
        'name' => '',
        'sku' => '',
        'reorder_point' => -1,
    ]);

    $response->assertStatus(422)
        ->assertJsonPath('code', 'VALIDATION_ERROR')
        ->assertJsonStructure(['message', 'errors', 'code']);
});

it('actualiza y da de baja un producto', function (): void {
    actingAsInventoryManager();

    $product = Product::factory()->create([
        'name' => 'Producto Inicial',
        'sku' => 'SKU-INIT-001',
        'reorder_point' => 4,
    ]);
    StockLevel::query()->create(['product_id' => $product->id, 'quantity' => 3]);

    $update = $this->patchJson("/api/v1/inventory/products/{$product->id}", [
        'name' => 'Producto Actualizado',
        'reorder_point' => 9,
    ]);

    $update->assertOk()
        ->assertJsonPath('data.name', 'Producto Actualizado')
        ->assertJsonPath('data.reorder_point', 9);

    $delete = $this->deleteJson("/api/v1/inventory/products/{$product->id}");
    $delete->assertNoContent();

    $this->getJson("/api/v1/inventory/products/{$product->id}")
        ->assertNotFound()
        ->assertJsonPath('code', 'HTTP_404');
});
