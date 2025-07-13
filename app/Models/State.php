<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    // Cars don't have a state, but a city does.
    public function cars(): HasManyThrough
    {
        return $this->hasManyThrough(Car::class, City::class);
    }
}
