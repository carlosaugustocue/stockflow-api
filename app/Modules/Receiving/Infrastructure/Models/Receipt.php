<?php

declare(strict_types=1);

namespace Modules\Receiving\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Receipt extends Model
{
    protected $table = 'receiving_receipts';

    protected $fillable = [
        'supplier_reference',
        'received_at',
        'notes',
    ];

    protected $casts = [
        'received_at' => 'datetime',
    ];

    public function lots(): HasMany
    {
        return $this->hasMany(ReceiptLotLink::class, 'receipt_id');
    }
}
