<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Actions;

use Modules\Inventory\Infrastructure\Models\Location;
use Modules\Inventory\Infrastructure\Models\StockLevel;
use Modules\Reporting\Infrastructure\Models\InventoryMetric;

final class GetReportingSummaryAction
{
    /**
     * @return array<string, float|int>
     */
    public function __invoke(): array
    {
        $totalProductsWithMetrics = InventoryMetric::query()->count();
        $productsBelowReorder = InventoryMetric::query()->where('stock_gap', '<=', 0)->count();
        $totalStock = (int) StockLevel::query()->sum('quantity');
        $locations = max(1, Location::query()->count());

        return [
            'service_level' => $totalProductsWithMetrics > 0
                ? round((($totalProductsWithMetrics - $productsBelowReorder) / $totalProductsWithMetrics) * 100, 2)
                : 100.0,
            'warehouse_utilization' => round($totalStock / ($locations * 100), 2),
            'inventory_rotation_proxy' => round($totalStock > 0 ? $productsBelowReorder / $totalStock : 0, 4),
        ];
    }
}
