<?php

declare(strict_types=1);

namespace Modules\Receiving\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class ReceiptResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'supplier_reference' => $this->supplier_reference,
            'received_at' => $this->received_at?->toISOString(),
            'notes' => $this->notes,
        ];
    }
}
