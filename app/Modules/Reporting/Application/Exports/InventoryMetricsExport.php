<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Modules\Reporting\Infrastructure\Models\InventoryMetric;

final class InventoryMetricsExport implements FromCollection, WithHeadings
{
    public function collection(): Collection
    {
        return InventoryMetric::query()
            ->orderBy('product_id')
            ->get()
            ->map(fn (InventoryMetric $metric): array => [
                $metric->product_id,
                $metric->sku,
                $metric->product_name,
                $metric->current_stock,
                $metric->reorder_point,
                $metric->stock_gap,
                optional($metric->updated_from_event_at)->toDateTimeString(),
            ]);
    }

    public function headings(): array
    {
        return [
            'product_id',
            'sku',
            'product_name',
            'current_stock',
            'reorder_point',
            'stock_gap',
            'updated_from_event_at',
        ];
    }
}
