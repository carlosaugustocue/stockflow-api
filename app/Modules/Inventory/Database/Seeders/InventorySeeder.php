<?php

declare(strict_types=1);

namespace Modules\Inventory\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Inventory\Infrastructure\Models\Location;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;

final class InventorySeeder extends Seeder
{
    public function run(): void
    {
        $location = Location::query()->firstOrCreate(
            ['code' => 'A-01-01'],
            ['name' => 'Pasillo A / Nivel 1 / Posición 01'],
        );

        Product::factory()->count(5)->create()->each(function (Product $product) use ($location): void {
            StockLevel::query()->firstOrCreate(
                ['product_id' => $product->id],
                ['quantity' => fake()->numberBetween(0, 50)],
            );

            $product->lots()->create([
                'location_id' => $location->id,
                'lot_number' => strtoupper(fake()->bothify('LOT-###??')),
                'expires_at' => now()->addDays(fake()->numberBetween(30, 365))->toDateString(),
                'quantity' => fake()->numberBetween(1, 40),
            ]);
        });
    }
}
