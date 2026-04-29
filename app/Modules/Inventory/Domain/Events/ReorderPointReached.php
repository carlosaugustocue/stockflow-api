<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\Events;

final readonly class ReorderPointReached
{
    public function __construct(
        public int $productId,
        public int $currentQuantity,
        public int $reorderPoint,
    ) {}
}
