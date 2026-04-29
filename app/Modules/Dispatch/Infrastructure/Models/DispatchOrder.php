<?php

declare(strict_types=1);

namespace Modules\Dispatch\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $order_reference
 * @property string|null $client_name
 * @property int $product_id
 * @property int $quantity
 * @property string $status
 * @property Carbon|null $expected_dispatch_at
 * @property Carbon|null $confirmed_at
 */
final class DispatchOrder extends Model
{
    protected $table = 'dispatch_orders';

    protected $fillable = [
        'order_reference',
        'client_name',
        'product_id',
        'quantity',
        'status',
        'expected_dispatch_at',
        'confirmed_at',
    ];

    protected $casts = [
        'expected_dispatch_at' => 'datetime',
        'confirmed_at' => 'datetime',
    ];

    /**
     * @return HasMany<DispatchPick, $this>
     */
    public function picks(): HasMany
    {
        return $this->hasMany(DispatchPick::class, 'dispatch_order_id');
    }
}
