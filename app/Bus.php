<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'model'
    ];

    protected $hidden = [
        'route_id',
        'driver_id',
        'created_at',
        'updated_at'
    ];

}
