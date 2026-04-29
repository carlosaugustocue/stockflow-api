<?php

declare(strict_types=1);

namespace Modules\Inventory\Application\DTOs;

final readonly class AdjustStockData
{
    public function __construct(
        public int $productId,
        public int $quantity,
        public string $operation,
        public string $reason,
    ) {}
}
