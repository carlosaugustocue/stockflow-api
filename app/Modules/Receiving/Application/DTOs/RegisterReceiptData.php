<?php

declare(strict_types=1);

namespace Modules\Receiving\Application\DTOs;

final readonly class RegisterReceiptData
{
    public function __construct(
        public string $supplierReference,
        public string $receivedAt,
        public ?string $notes,
    ) {}
}
