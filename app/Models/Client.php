<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $fillable = [
        'name',
        'partner_one_name',
        'partner_one_whatsapp',
        'partner_one_birthday',
        'partner_two_name',
        'partner_two_whatsapp',
        'partner_two_birthday',
        'email',
        'password',
        'session_type',
        'event_date',
        'event_location',
        'internal_rundown',
        'stage_index',
        'payment_status',
    ];

    protected $hidden = ['password'];

    protected function casts(): array
    {
        return [
            'partner_one_birthday' => 'date',
            'partner_two_birthday' => 'date',
            'event_date' => 'date',
            'stage_index' => 'integer',
        ];
    }

    public function photos(): HasMany
    {
        return $this->hasMany(ClientPhoto::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
