<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    use HasFactory;

    // protected $table = "car_fuel_types";
    // protected $primaryKey = "fuel_type_id";
    // public $incrementing = false;
    // protected $keyType = "string";
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = null;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
