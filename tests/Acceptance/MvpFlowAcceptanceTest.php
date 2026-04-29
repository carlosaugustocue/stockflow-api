<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;
use Modules\Auth\Database\Seeders\AuthRolesSeeder;
use Modules\Auth\Infrastructure\Models\Role;
use Modules\Inventory\Infrastructure\Models\Location;
use Modules\Inventory\Infrastructure\Models\Lot;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;

uses(RefreshDatabase::class);

function createUserWithRole(string $email, string $roleName): User
{
    $role = Role::query()->firstOrCreate(['name' => $roleName], ['description' => 'Rol de aceptación']);
    $user = User::factory()->create([
        'email' => $email,
        'password' => 'password123',
    ]);
    $user->roles()->sync([$role->id]);

    return $user;
}

it('escenario 1: login y me con token bearer', function (): void {
    $this->seed(AuthRolesSeeder::class);
    $user = createUserWithRole('manager.acceptance@example.com', 'warehouse_manager');

    $login = $this->postJson('/api/v1/auth/login', [
        'email' => $user->email,
        'password' => 'password123',
        'device_name' => 'acceptance-suite',
    ]);

    $login->assertOk()->assertJsonStructure(['data' => ['token', 'user'], 'meta']);
    $token = (string) $login->json('data.token');

    $this->withHeader('Authorization', 'Bearer '.$token)
        ->getJson('/api/v1/auth/me')
        ->assertOk()
        ->assertJsonPath('data.email', $user->email);
})->group('acceptance');

it('escenario 2: inventory registra y ajusta producto', function (): void {
    $this->seed(AuthRolesSeeder::class);
    $manager = createUserWithRole('inventory.acceptance@example.com', 'warehouse_manager');
    Sanctum::actingAs($manager);

    $create = $this->postJson('/api/v1/inventory/products', [
        'name' => 'Azúcar Morena 500g',
        'sku' => 'SKU-MVP-0001',
        'reorder_point' => 6,
    ]);
    $create->assertCreated()->assertJsonPath('data.stock.quantity', 0);

    $productId = (int) $create->json('data.id');

    $this->patchJson("/api/v1/inventory/products/{$productId}/stock", [
        'quantity' => 9,
        'operation' => 'add',
        'reason' => 'Stock inicial MVP',
    ])->assertOk()->assertJsonPath('data.stock.quantity', 9);
})->group('acceptance');

it('escenario 3: receiving suma stock por evento cross-module', function (): void {
    $this->seed(AuthRolesSeeder::class);
    $operator = createUserWithRole('receiving.acceptance@example.com', 'receiving_operator');
    Sanctum::actingAs($operator);

    $product = Product::factory()->create();
    StockLevel::query()->create(['product_id' => $product->id, 'quantity' => 0]);
    $location = Location::query()->create(['code' => 'ACC-01', 'name' => 'Ubicación aceptación']);

    $receipt = $this->postJson('/api/v1/receiving/receipts', [
        'supplier_reference' => 'ACPT-REC-1',
        'received_at' => now()->toISOString(),
        'notes' => 'Recepción aceptación',
    ]);
    $receipt->assertCreated();

    $receiptId = (int) $receipt->json('data.id');

    $this->postJson("/api/v1/receiving/receipts/{$receiptId}/lots", [
        'product_id' => $product->id,
        'lot_number' => 'LOT-ACCEPT-001',
        'expires_at' => now()->addMonths(4)->toDateString(),
        'quantity' => 7,
        'location_id' => $location->id,
    ])->assertCreated();

    expect((int) $product->stockLevel()->firstOrFail()->quantity)->toBe(7);
})->group('acceptance');

it('escenario 4: dispatch hace pick FEFO y confirma descuento', function (): void {
    $this->seed(AuthRolesSeeder::class);
    $operator = createUserWithRole('dispatch.acceptance@example.com', 'dispatch_operator');
    Sanctum::actingAs($operator);

    $product = Product::factory()->create();
    StockLevel::query()->create(['product_id' => $product->id, 'quantity' => 10]);
    Lot::query()->create([
        'product_id' => $product->id,
        'location_id' => null,
        'lot_number' => 'LOT-OLD-ACCEPT',
        'expires_at' => now()->addDays(10)->toDateString(),
        'quantity' => 4,
    ]);
    Lot::query()->create([
        'product_id' => $product->id,
        'location_id' => null,
        'lot_number' => 'LOT-NEW-ACCEPT',
        'expires_at' => now()->addDays(30)->toDateString(),
        'quantity' => 6,
    ]);

    $order = $this->postJson('/api/v1/dispatch/orders', [
        'order_reference' => 'ACPT-DSP-1',
        'product_id' => $product->id,
        'quantity' => 5,
    ]);
    $order->assertCreated();

    $orderId = (int) $order->json('data.id');
    $this->postJson("/api/v1/dispatch/orders/{$orderId}/pick-fefo")->assertOk();
    $this->postJson("/api/v1/dispatch/orders/{$orderId}/confirm")->assertOk();

    expect((int) $product->stockLevel()->firstOrFail()->quantity)->toBe(5);
})->group('acceptance');

it('escenario 5: reporting responde métricas y exportaciones', function (): void {
    $this->seed(AuthRolesSeeder::class);
    $manager = createUserWithRole('reporting.acceptance@example.com', 'warehouse_manager');
    Sanctum::actingAs($manager);

    $product = Product::factory()->create(['reorder_point' => 3]);
    StockLevel::query()->create(['product_id' => $product->id, 'quantity' => 2]);

    $this->patchJson("/api/v1/inventory/products/{$product->id}/stock", [
        'quantity' => 2,
        'operation' => 'add',
        'reason' => 'Trigger reporting',
    ])->assertOk();

    $this->getJson('/api/v1/reporting/inventory-metrics')->assertOk();
    $this->getJson('/api/v1/reporting/summary')->assertOk();
    $this->get('/api/v1/reporting/inventory-metrics/export/pdf')->assertOk();
    $this->get('/api/v1/reporting/inventory-metrics/export/excel')->assertOk();
})->group('acceptance');

it('escenario 6: seguridad y errores unificados', function (): void {
    $this->seed(AuthRolesSeeder::class);
    $operator = createUserWithRole('forbidden.acceptance@example.com', 'receiving_operator');
    Sanctum::actingAs($operator);

    $forbidden = $this->getJson('/api/v1/inventory/products');
    $forbidden->assertForbidden()->assertJsonPath('code', 'AUTH_FORBIDDEN');

    $role = Role::query()->firstOrCreate(['name' => 'dispatch_operator'], ['description' => 'Rol dispatch']);
    $user = User::factory()->create([
        'email' => 'business.acceptance@example.com',
        'password' => Hash::make('password123'),
    ]);
    $user->roles()->sync([$role->id]);
    Sanctum::actingAs($user);

    $product = Product::factory()->create();
    StockLevel::query()->create(['product_id' => $product->id, 'quantity' => 1]);

    $business = $this->postJson('/api/v1/dispatch/orders', [
        'order_reference' => 'ACPT-ERR-1',
        'product_id' => $product->id,
        'quantity' => 9,
    ]);

    $business->assertStatus(409)->assertJsonPath('code', 'BUSINESS_RULE_VIOLATION');
})->group('acceptance');
