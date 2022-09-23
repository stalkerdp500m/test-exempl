<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function simCards()
    {
        return $this->hasMany(SimCard::class);
    }
    public function activeSimCards()
    {
        return $this->hasMany(SimCard::class)->where('is_active', true);
    }
}
