<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\ValueObjects;

use InvalidArgumentException;

final readonly class Quantity
{
    public function __construct(public int $value)
    {
        if ($value < 0) {
            throw new InvalidArgumentException('La cantidad no puede ser negativa.');
        }
    }
}
