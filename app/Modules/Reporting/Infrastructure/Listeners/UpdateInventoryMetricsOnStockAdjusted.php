<?php

declare(strict_types=1);

namespace Modules\Reporting\Infrastructure\Listeners;

use Modules\Inventory\Domain\Events\StockAdjusted;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Reporting\Infrastructure\Models\InventoryMetric;

final class UpdateInventoryMetricsOnStockAdjusted
{
    public function handle(StockAdjusted $event): void
    {
        $product = Product::query()->with('stockLevel')->find($event->productId);

        if (! $product || ! $product->stockLevel) {
            return;
        }

        $currentStock = (int) $product->stockLevel->quantity;
        $reorderPoint = (int) $product->reorder_point;

        InventoryMetric::query()->updateOrCreate(
            ['product_id' => $product->id],
            [
                'sku' => $product->sku,
                'product_name' => $product->name,
                'current_stock' => $currentStock,
                'reorder_point' => $reorderPoint,
                'stock_gap' => $currentStock - $reorderPoint,
                'updated_from_event_at' => now(),
            ],
        );
    }
}
