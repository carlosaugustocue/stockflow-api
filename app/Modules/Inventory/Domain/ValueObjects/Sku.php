<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\ValueObjects;

use InvalidArgumentException;

final readonly class Sku
{
    public function __construct(public string $value)
    {
        if (! preg_match('/^[A-Z0-9\-]{4,32}$/', $value)) {
            throw new InvalidArgumentException('El SKU debe ser alfanumérico en mayúsculas (4-32).');
        }
    }
}
