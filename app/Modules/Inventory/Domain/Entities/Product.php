<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\Entities;

use Modules\Inventory\Domain\ValueObjects\ReorderPoint;
use Modules\Inventory\Domain\ValueObjects\Sku;

final readonly class Product
{
    public function __construct(
        public string $name,
        public Sku $sku,
        public ReorderPoint $reorderPoint,
    ) {}
}
