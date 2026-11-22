<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'client_id',
        'transfer_note',
        'status',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
