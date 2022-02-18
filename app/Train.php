<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'company',
        'departure_station',
        'arrival_station',
        'departure_at',
        'arrival_at',
        'train_code',
        'carriages',
        'on_time',
        'canceled',
    ];
}
