<?php

declare(strict_types=1);

namespace Modules\Dispatch\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Dispatch\Infrastructure\Models\DispatchOrder;

/** @mixin DispatchOrder */
final class DispatchOrderResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_reference' => $this->order_reference,
            'client_name' => $this->client_name,
            'product_id' => (int) $this->product_id,
            'quantity' => (int) $this->quantity,
            'status' => $this->status,
            'expected_dispatch_at' => $this->expected_dispatch_at?->toISOString(),
            'confirmed_at' => $this->confirmed_at?->toISOString(),
            'picks' => $this->whenLoaded('picks', fn (): array => $this->picks->map(fn ($pick): array => [
                'inventory_lot_id' => (int) $pick->inventory_lot_id,
                'picked_quantity' => (int) $pick->picked_quantity,
            ])->all()),
        ];
    }
}
