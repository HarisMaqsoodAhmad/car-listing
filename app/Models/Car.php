<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'year',
        'price',
        'vin',
        'mileage',
        'address',
        'phone',
        'description',
        'car_type_id',
        'fuel_type_id',
        'city_id',
        'user_id',
        'maker_id',
        'model_id',
        'published_at',
    ];

    public function features(): HasOne
    {
        return $this->hasOne(CarFeature::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(CarImage::class)
            ->oldestOfMany('position');
    }
}
