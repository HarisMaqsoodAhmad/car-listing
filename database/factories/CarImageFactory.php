<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CarImage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image_urls = [
            '/assets/img/cars/Lexus-RX200t-2016/1.jpeg',
            '/assets/img/cars/Lexus-RX200t-2016/2.jpeg',
            '/assets/img/cars/Lexus-RX200t-2016/3.jpeg',
            '/assets/img/cars/Lexus-RX200t-2016/4.jpeg',
            '/assets/img/cars/Lexus-RX200t-2016/5.jpeg',
            '/assets/img/cars/Lexus-RX200t-2016/6.jpeg',
            '/assets/img/cars/Lexus-RX200t-2016/7.jpeg',
        ];
        $image_path = $this->faker->randomElement($image_urls);
        return [
            // 'image_path' => $this->faker->imageUrl(),
            'image_path' => $image_path,
            'position' => function (array $attributes) {
                return CarImage::where('car_id', $attributes['car_id'])->max('position') + 1;
            },
        ];
    }
}
