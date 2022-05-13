<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'train_company','departure_station','arrival_station','departure_time',
        'arrival_time','train_code','number_of_carriages','in_time','deleted'
    ];
}
