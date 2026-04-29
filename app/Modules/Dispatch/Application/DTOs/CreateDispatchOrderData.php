<?php

declare(strict_types=1);

namespace Modules\Dispatch\Application\DTOs;

final readonly class CreateDispatchOrderData
{
    public function __construct(
        public string $orderReference,
        public ?string $clientName,
        public int $productId,
        public int $quantity,
        public ?string $expectedDispatchAt,
    ) {}
}
