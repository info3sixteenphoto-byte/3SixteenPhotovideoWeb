<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientPhoto extends Model
{
    protected $fillable = [
        'client_id',
        'code',
        'title',
        'storage_path',
        'edit',
        'album',
    ];

    protected function casts(): array
    {
        return [
            'edit' => 'boolean',
            'album' => 'boolean',
        ];
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
