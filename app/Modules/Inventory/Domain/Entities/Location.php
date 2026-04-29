<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\Entities;

final readonly class Location
{
    public function __construct(
        public string $code,
        public string $name,
    ) {}
}
