<?php

declare(strict_types=1);

namespace Modules\Receiving\Application\Actions;

use Modules\Receiving\Application\DTOs\RegisterReceiptData;
use Modules\Receiving\Infrastructure\Models\Receipt;

final class RegisterReceiptAction
{
    public function __invoke(RegisterReceiptData $data): Receipt
    {
        return Receipt::query()->create([
            'supplier_reference' => $data->supplierReference,
            'received_at' => $data->receivedAt,
            'notes' => $data->notes,
        ]);
    }
}
