<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavouriteCar extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'car_id',
        'user_id'
    ];
}
