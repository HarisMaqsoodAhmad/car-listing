<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Maker;
use App\Models\Model;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\City;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maker_id' => Maker::inRandomOrder()->first()->id,
            'model_id' => function (array $attributes) {
                return Model::where('maker_id', $attributes['maker_id'])->inRandomOrder()->first()->id;
            },
            'year' => $this->faker->numberBetween(2000, 2025),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'vin' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{6}'),
            'mileage' => $this->faker->numberBetween(1000, 100000),
            'description' => $this->faker->paragraph,
            'car_type_id' => CarType::inRandomOrder()->first()->id,
            'fuel_type_id' => FuelType::inRandomOrder()->first()->id,
            'city_id' => City::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'address' => $this->faker->address,
            'phone' => function (array $attributes) {
                return User::find($attributes['user_id'])->phone;
            },
            'published_at' => $this->faker->optional(0.9)->dateTimeBetween('-1 year', '+1 day'),
        ];
    }
}
