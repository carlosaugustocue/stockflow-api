<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\Events;

final readonly class StockAdjusted
{
    public function __construct(
        public int $productId,
        public int $newQuantity,
        public string $reason,
    ) {}
}
