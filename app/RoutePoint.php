<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoutePoint extends Model
{
    protected $fillable = [
        'street_name',
        'street_number',
        'lat',
        'lng',

    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
