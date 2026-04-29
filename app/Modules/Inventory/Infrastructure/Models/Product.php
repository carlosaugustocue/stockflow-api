<?php

declare(strict_types=1);

namespace Modules\Inventory\Infrastructure\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Inventory\Database\Factories\ProductFactory;

final class Product extends Model
{
    use HasFactory;

    protected $table = 'inventory_products';

    protected $fillable = [
        'name',
        'sku',
        'reorder_point',
    ];

    public function lots(): HasMany
    {
        return $this->hasMany(Lot::class, 'product_id');
    }

    public function stockLevel(): HasOne
    {
        return $this->hasOne(StockLevel::class, 'product_id');
    }

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }
}
