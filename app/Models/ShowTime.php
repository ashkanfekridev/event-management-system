<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{


    protected $casts = [
        'start_at' => 'date'
    ];


    public $timestamps = false;
}
