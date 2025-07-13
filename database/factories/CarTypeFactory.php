<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarType>
 */
class CarTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Sedan', 'SUV', 'Truck', 'Van', 'Minivan', 'Coupe', 'Convertible', 'Hatchback', 'Wagon', 'Pickup', 'Crossover', 'Roadster', 'SUV', 'CUV', 'MPV', 'Minivan', 'Cargo Van', 'Passenger Van', 'SUV', 'CUV', 'MPV', 'Minivan', 'Cargo Van', 'Passenger Van', 'SUV', 'CUV', 'MPV', 'Minivan', 'Cargo Van', 'Passenger Van']),
        ];
    }
}
