<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Modules\Auth\Infrastructure\Models\Role;
use Modules\Inventory\Infrastructure\Models\Location;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;

uses(RefreshDatabase::class);

function actingAsReceivingOperator(): void
{
    $role = Role::query()->firstOrCreate(['name' => 'receiving_operator'], ['description' => 'Operación de recepción']);
    $user = User::factory()->create();
    $user->roles()->sync([$role->id]);
    Sanctum::actingAs($user);
}

it('registra recepción y vincula lote incrementando stock en inventory por evento', function (): void {
    actingAsReceivingOperator();

    $product = Product::factory()->create();
    StockLevel::query()->create([
        'product_id' => $product->id,
        'quantity' => 0,
    ]);

    $location = Location::query()->create([
        'code' => 'B-02-01',
        'name' => 'Pasillo B / Nivel 2 / Posición 01',
    ]);

    $receiptResponse = $this->postJson('/api/v1/receiving/receipts', [
        'supplier_reference' => 'FAC-7788',
        'received_at' => now()->toISOString(),
        'notes' => 'Entrega parcial',
    ]);

    $receiptResponse->assertCreated();
    $receiptId = (int) $receiptResponse->json('data.id');

    $linkResponse = $this->postJson("/api/v1/receiving/receipts/{$receiptId}/lots", [
        'product_id' => $product->id,
        'lot_number' => 'LOT-REC-001',
        'expires_at' => now()->addMonths(6)->toDateString(),
        'quantity' => 12,
        'location_id' => $location->id,
    ]);

    $linkResponse->assertCreated()
        ->assertJsonPath('data.lot_number', 'LOT-REC-001');

    expect((int) $product->stockLevel()->firstOrFail()->quantity)->toBe(12);
});
