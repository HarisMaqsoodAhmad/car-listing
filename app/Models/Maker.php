<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Maker extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function models(): HasMany
    {
        return $this->hasMany(\App\Models\Model::class);
    }
}
