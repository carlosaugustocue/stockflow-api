<?php

declare(strict_types=1);

namespace Modules\Inventory\Infrastructure\Listeners;

use Modules\Inventory\Infrastructure\Models\Lot;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;
use Modules\Receiving\Domain\Events\MerchandiseReceived;

final class SyncInventoryOnMerchandiseReceived
{
    public function handle(MerchandiseReceived $event): void
    {
        $product = Product::query()->findOrFail($event->productId);

        Lot::query()->updateOrCreate(
            [
                'product_id' => $product->id,
                'lot_number' => $event->lotNumber,
            ],
            [
                'location_id' => $event->locationId,
                'expires_at' => $event->expiresAt,
                'quantity' => $event->quantity,
            ],
        );

        $stock = StockLevel::query()->firstOrCreate(
            ['product_id' => $product->id],
            ['quantity' => 0],
        );

        $stock->quantity += $event->quantity;
        $stock->save();
    }
}
