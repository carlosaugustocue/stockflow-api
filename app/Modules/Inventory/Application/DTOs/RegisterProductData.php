<?php

declare(strict_types=1);

namespace Modules\Inventory\Application\DTOs;

final readonly class RegisterProductData
{
    public function __construct(
        public string $name,
        public ?string $category,
        public string $sku,
        public int $reorderPoint,
    ) {}
}
