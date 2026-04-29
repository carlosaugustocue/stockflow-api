<?php

declare(strict_types=1);

namespace Modules\Inventory\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $product_id
 * @property int|null $location_id
 * @property string $lot_number
 * @property Carbon|null $expires_at
 * @property int $quantity
 */
final class Lot extends Model
{
    protected $table = 'inventory_lots';

    protected $fillable = [
        'product_id',
        'location_id',
        'lot_number',
        'expires_at',
        'quantity',
    ];

    protected $casts = [
        'expires_at' => 'date',
    ];

    /**
     * @return BelongsTo<Product, $this>
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * @return BelongsTo<Location, $this>
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
