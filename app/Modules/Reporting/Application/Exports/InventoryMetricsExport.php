<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Modules\Reporting\Infrastructure\Models\InventoryMetric;

final class InventoryMetricsExport implements FromCollection, WithHeadings
{
    /**
     * @param  array<string, string|null>  $filters
     */
    public function __construct(
        private readonly array $filters = [],
    ) {}

    public function collection(): Collection
    {
        $query = InventoryMetric::query()
            ->orderBy('product_id');

        if (! empty($this->filters['category'])) {
            $category = (string) $this->filters['category'];
            $query->whereHas('product', fn ($q): mixed => $q->where('category', $category));
        }

        if (! empty($this->filters['zone'])) {
            $zone = (string) $this->filters['zone'];
            $query->whereHas('product.lots.location', function ($q) use ($zone): void {
                $q->where('code', 'like', $zone.'%')
                    ->orWhere('name', 'like', '%'.$zone.'%');
            });
        }

        if (! empty($this->filters['from'])) {
            $query->whereDate('updated_from_event_at', '>=', (string) $this->filters['from']);
        }

        if (! empty($this->filters['to'])) {
            $query->whereDate('updated_from_event_at', '<=', (string) $this->filters['to']);
        }

        return $query->get()
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
