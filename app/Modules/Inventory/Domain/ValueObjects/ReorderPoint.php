<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\ValueObjects;

use InvalidArgumentException;

final readonly class ReorderPoint
{
    public function __construct(public int $value)
    {
        if ($value < 0) {
            throw new InvalidArgumentException('El punto de reorden no puede ser negativo.');
        }
    }
}
