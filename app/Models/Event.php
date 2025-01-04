<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function showTimes()
    {
        return $this->hasMany(ShowTime::class);
    }
}
