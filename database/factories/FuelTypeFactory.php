<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FuelType>
 */
class FuelTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Gas', 'Diesel', 'Electric', 'Hybrid', 'Plug-in Hybrid', 'Natural Gas', 'Propane', 'Hydrogen', 'Ethanol', 'Biodiesel', 'Methanol', 'CNG', 'LPG', 'Hydrogen Fuel Cell', 'Fuel Cell', 'Bio-Diesel', 'Bio-Ethanol', 'Bio-Methanol', 'Bio-CNG', 'Bio-LPG', 'Bio-Hydrogen', 'Bio-Hydrogen Fuel Cell', 'Bio-Fuel Cell', 'Bio-Bio-Diesel', 'Bio-Bio-Ethanol', 'Bio-Bio-Methanol', 'Bio-Bio-CNG', 'Bio-Bio-LPG', 'Bio-Bio-Hydrogen', 'Bio-Bio-Hydrogen Fuel Cell', 'Bio-Bio-Fuel Cell']),
        ];
    }
}
