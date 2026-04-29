<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\ValueObjects;

use InvalidArgumentException;

final readonly class LotNumber
{
    public function __construct(public string $value)
    {
        if (! preg_match('/^[A-Z0-9\-]{3,40}$/', $value)) {
            throw new InvalidArgumentException('El lote debe tener formato alfanumérico (3-40).');
        }
    }
}
