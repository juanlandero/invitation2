<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guest extends Model
{
    protected $table = 'guests';

    public $fillable = [
        'family',
        'guest_quantity',
        'is_confirmed',
    ];

    public function guestPhones(): HasMany
    {
        return $this->hasMany(GuestPhone::class);
    }
}
