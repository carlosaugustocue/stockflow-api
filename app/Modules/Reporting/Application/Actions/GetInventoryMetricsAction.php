<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Actions;

use Illuminate\Support\Collection;
use Modules\Reporting\Infrastructure\Models\InventoryMetric;

final class GetInventoryMetricsAction
{
    public function __invoke(): Collection
    {
        return InventoryMetric::query()
            ->orderBy('stock_gap')
            ->orderBy('product_id')
            ->get();
    }
}
