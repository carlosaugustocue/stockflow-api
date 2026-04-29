<?php

declare(strict_types=1);

namespace Modules\Receiving\Application\DTOs;

final readonly class LinkLotToReceiptData
{
    public function __construct(
        public int $receiptId,
        public int $productId,
        public string $lotNumber,
        public string $expiresAt,
        public int $quantity,
        public ?int $locationId,
    ) {}
}
