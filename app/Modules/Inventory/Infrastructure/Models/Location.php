<?php

declare(strict_types=1);

namespace Modules\Inventory\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Location extends Model
{
    protected $table = 'inventory_locations';

    protected $fillable = [
        'code',
        'name',
    ];

    public function lots(): HasMany
    {
        return $this->hasMany(Lot::class, 'location_id');
    }
}
