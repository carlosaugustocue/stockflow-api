<?php

declare(strict_types=1);

namespace Modules\Dispatch\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class DispatchOrder extends Model
{
    protected $table = 'dispatch_orders';

    protected $fillable = [
        'order_reference',
        'product_id',
        'quantity',
        'status',
    ];

    public function picks(): HasMany
    {
        return $this->hasMany(DispatchPick::class, 'dispatch_order_id');
    }
}
