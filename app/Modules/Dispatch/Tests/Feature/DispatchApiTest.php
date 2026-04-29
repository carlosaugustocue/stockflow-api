<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Modules\Auth\Infrastructure\Models\Role;
use Modules\Inventory\Infrastructure\Models\Lot;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;

uses(RefreshDatabase::class);

function actingAsDispatchOperator(): void
{
    $role = Role::query()->firstOrCreate(['name' => 'dispatch_operator'], ['description' => 'Operación de despacho']);
    $user = User::factory()->create();
    $user->roles()->sync([$role->id]);
    Sanctum::actingAs($user);
}

it('ejecuta flujo de despacho con picking FEFO y confirmación', function (): void {
    actingAsDispatchOperator();

    $product = Product::factory()->create();

    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 20,
    ]);

    $lotEarly = Lot::query()->create([
        'product_id' => $product->id,
        'location_id' => null,
        'lot_number' => 'LOT-OLD-001',
        'expires_at' => now()->addDays(15)->toDateString(),
        'quantity' => 8,
    ]);

    $lotLate = Lot::query()->create([
        'product_id' => $product->id,
        'location_id' => null,
        'lot_number' => 'LOT-NEW-001',
        'expires_at' => now()->addDays(45)->toDateString(),
        'quantity' => 12,
    ]);

    $create = $this->postJson('/api/v1/dispatch/orders', [
        'order_reference' => 'ORD-10001',
        'product_id' => $product->id,
        'quantity' => 10,
        'expected_dispatch_at' => now()->addDay()->toISOString(),
    ]);
    $create->assertCreated();
    $orderId = (int) $create->json('data.id');

    $pick = $this->postJson("/api/v1/dispatch/orders/{$orderId}/pick-fefo");
    $pick->assertOk()->assertJsonPath('data.status', 'picked');

    $confirm = $this->postJson("/api/v1/dispatch/orders/{$orderId}/confirm");
    $confirm->assertOk()->assertJsonPath('data.status', 'confirmed');

    expect((int) $lotEarly->fresh()->quantity)->toBe(0);
    expect((int) $lotLate->fresh()->quantity)->toBe(10);
    expect((int) $product->stockLevel()->firstOrFail()->quantity)->toBe(10);
});

it('retorna error de negocio cuando no hay stock suficiente', function (): void {
    actingAsDispatchOperator();

    $product = Product::factory()->create();

    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 1,
    ]);

    $response = $this->postJson('/api/v1/dispatch/orders', [
        'order_reference' => 'ORD-INSUF-01',
        'product_id' => $product->id,
        'quantity' => 5,
    ]);

    $response->assertStatus(409)
        ->assertJsonPath('code', 'BUSINESS_RULE_VIOLATION')
        ->assertJsonStructure(['message', 'errors', 'code']);
});
