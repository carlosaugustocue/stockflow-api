<?php

declare(strict_types=1);

use Modules\Inventory\Domain\Entities\StockLevel;
use Modules\Inventory\Domain\ValueObjects\Quantity;
use Modules\Inventory\Domain\ValueObjects\Sku;

it('valida formato de sku', function (): void {
    expect(fn () => new Sku('abc'))->toThrow(InvalidArgumentException::class);
    expect((new Sku('SKU-1001'))->value)->toBe('SKU-1001');
});

it('aplica reglas de stock sin negativos', function (): void {
    $stock = new StockLevel(new Quantity(10));
    $stock->decrease(new Quantity(4));
    expect($stock->quantity()->value)->toBe(6);

    expect(fn () => $stock->decrease(new Quantity(7)))->toThrow(RuntimeException::class);
});
