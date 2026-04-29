<?php

declare(strict_types=1);

namespace Modules\Receiving\Domain\Events;

final readonly class MerchandiseReceived
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
