<?php

declare(strict_types=1);

namespace Modules\Dispatch\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class DispatchOrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_reference' => $this->order_reference,
            'product_id' => (int) $this->product_id,
            'quantity' => (int) $this->quantity,
            'status' => $this->status,
            'picks' => $this->whenLoaded('picks', fn (): array => $this->picks->map(fn ($pick): array => [
                'inventory_lot_id' => (int) $pick->inventory_lot_id,
                'picked_quantity' => (int) $pick->picked_quantity,
            ])->all()),
        ];
    }
}
