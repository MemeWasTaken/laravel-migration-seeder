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
        'departure_date',
        'arrival_at',
        'arrival_date',
        'train_code',
        'carriages',
        'on_time',
        'canceled',
    ];
}
