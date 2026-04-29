<?php

declare(strict_types=1);

namespace Modules\Reporting\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class InventoryMetricResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'product_id' => (int) $this->product_id,
            'sku' => $this->sku,
            'product_name' => $this->product_name,
            'current_stock' => (int) $this->current_stock,
            'reorder_point' => (int) $this->reorder_point,
            'stock_gap' => (int) $this->stock_gap,
            'updated_from_event_at' => $this->updated_from_event_at?->toISOString(),
        ];
    }
}
