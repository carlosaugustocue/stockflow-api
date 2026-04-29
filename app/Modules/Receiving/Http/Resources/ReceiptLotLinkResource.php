<?php

declare(strict_types=1);

namespace Modules\Receiving\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class ReceiptLotLinkResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'receipt_id' => $this->receipt_id,
            'product_id' => $this->product_id,
            'lot_number' => $this->lot_number,
            'expires_at' => $this->expires_at?->toDateString(),
            'quantity' => (int) $this->quantity,
            'location_id' => $this->location_id,
        ];
    }
}
