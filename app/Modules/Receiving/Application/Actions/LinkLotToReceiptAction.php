<?php

declare(strict_types=1);

namespace Modules\Receiving\Application\Actions;

use Illuminate\Support\Facades\Event;
use Modules\Receiving\Application\DTOs\LinkLotToReceiptData;
use Modules\Receiving\Domain\Events\MerchandiseReceived;
use Modules\Receiving\Infrastructure\Models\ReceiptLotLink;

final class LinkLotToReceiptAction
{
    public function __invoke(LinkLotToReceiptData $data): ReceiptLotLink
    {
        $link = ReceiptLotLink::query()->create([
            'receipt_id' => $data->receiptId,
            'product_id' => $data->productId,
            'lot_number' => strtoupper($data->lotNumber),
            'expires_at' => $data->expiresAt,
            'quantity' => $data->quantity,
            'location_id' => $data->locationId,
        ]);

        Event::dispatch(new MerchandiseReceived(
            receiptId: $link->receipt_id,
            productId: $link->product_id,
            lotNumber: $link->lot_number,
            expiresAt: (string) $link->expires_at,
            quantity: (int) $link->quantity,
            locationId: $link->location_id,
        ));

        return $link;
    }
}
