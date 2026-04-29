<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\Events;

final readonly class ProductRegistered
{
    public function __construct(
        public int $productId,
        public string $sku,
    ) {}
}
