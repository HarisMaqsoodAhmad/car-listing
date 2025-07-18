<?php

namespace Database\Seeders;

use App\Models\CarType;
use App\Models\FuelType;
use App\Models\User;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Car Types List
        $carTypes = array(
            ["name" => "Sedan"],
            ["name" => "Hatchback"],
            ["name" => "SUV"],
            ["name" => "Pickup Truck"],
            ["name" => "Mini Van"],
            ["name" => "Jeep"],
            ["name" => "Coupe"],
            ["name" => "Crossover"],
            ["name" => "Sports Car"],
        );

        // Seed the car types
        CarType::factory()
            ->sequence(...$carTypes)
            ->count(count($carTypes))
            ->create();

        // Fuel Types List
        $fuelTypes = array(
            ["name" => "Petrol",],
            ["name" => "Gasoline",],
            ["name" => "Diesel",],
            ["name" => "Electric",],
            ["name" => "Hybrid",],
        );

        // Seed the fuel types
        FuelType::factory()
            ->sequence(...$fuelTypes)
            ->count(count($fuelTypes))
            ->create();

        // States and cities list
        $states = array(
            'California'     => ['San Francisco', 'Los Angeles', 'San Diego'],
            'Texas'          => ['Houston', 'Dallas', 'Austin'],
            'New York'       => ['New York City', 'Buffalo', 'Rochester'],
            'Florida'        => ['Miami', 'Orlando', 'Tampa'],
            'Illinois'       => ['Chicago', 'Aurora', 'Naperville'],
            'Pennsylvania'   => ['Philadelphia', 'Pittsburgh', 'Allentown'],
            'Ohio'           => ['Columbus', 'Cleveland', 'Cincinnati'],
            'Michigan'       => ['Detroit', 'Grand Rapids', 'Warren'],
            'Georgia'        => ['Atlanta', 'Savannah', 'Augusta'],
            'North Carolina' => ['Charlotte', 'Raleigh', 'Greensboro'],
            'Arizona'        => ['Phoenix', 'Tucson', 'Mesa'],
            'Washington'     => ['Seattle', 'Spokane', 'Tacoma'],
            'Colorado'       => ['Denver', 'Colorado Springs', 'Aurora'],
            'Massachusetts'  => ['Boston', 'Worcester', 'Springfield'],
            'Oregon'         => ['Portland', 'Eugene', 'Salem'],
            'Nevada'         => ['Las Vegas', 'Reno', 'Henderson'],
            'New Jersey'     => ['Newark', 'Jersey City', 'Paterson'],
            'Virginia'       => ['Richmond', 'Virginia Beach', 'Norfolk'],
            'Tennessee'      => ['Nashville', 'Memphis', 'Knoxville'],
            'Indiana'        => ['Indianapolis', 'Fort Wayne', 'Evansville'],
            'Missouri'       => ['Kansas City', 'St. Louis', 'Springfield'],
            'Minnesota'      => ['Minneapolis', 'Saint Paul', 'Bloomington'],
            'Wisconsin'      => ['Milwaukee', 'Madison', 'Green Bay'],
            'Alabama'        => ['Birmingham', 'Montgomery', 'Huntsville'],
            'Louisiana'      => ['New Orleans', 'Baton Rouge', 'Shreveport'],
            'Arkansas'       => ['Little Rock', 'Fort Smith', 'Fayetteville'],
            'Iowa'           => ['Des Moines', 'Cedar Rapids', 'Davenport'],
            'Mississippi'    => ['Jackson', 'Gulfport', 'Hattiesburg'],
            'Kansas'         => ['Wichita', 'Overland Park', 'Kansas City'],
        );

        // Seed the states and cities
        foreach ($states as $state => $cities) {
            State::factory()
                ->state(['name' => $state])
                ->has(
                    City::factory()->count(count($cities))
                        ->sequence(...array_map(fn($city) => ['name' => $city], $cities))
                )
                ->create();
        }

        // Create Makers with their corresponding Models
        $makers = array(
            'Toyota' => ['Corolla', 'Camry', 'RAV4'],
            'Honda' => ['Civic', 'Accord', 'CR-V'],
            'Ford' => ['F-150', 'Mustang', 'Explorer'],
            'Chevrolet' => ['Silverado', 'Camaro', 'Equinox'],
            'BMW' => ['3 Series', 'X5', 'M3'],
            'Mercedes-Benz' => ['C-Class', 'E-Class', 'S-Class'],
            'Audi' => ['A4', 'Q5', 'A6'],
            'Nissan' => ['Altima', 'Rogue', 'Pathfinder'],
            'Hyundai' => ['Elantra', 'Tucson', 'Santa Fe'],
            'Kia' => ['Sorento', 'Sportage', 'Optima'],
            'Subaru' => ['Forester', 'Outback', 'Crosstrek'],
            'Mazda' => ['CX-5', 'Mazda3', 'Mazda6'],
            'Volkswagen' => ['Golf', 'Jetta', 'Tiguan'],
        );

        // Seed the makers and their models
        foreach ($makers as $maker => $models) {
            Maker::factory()
                ->state(['name' => $maker])
                ->has(
                    Model::factory()
                        ->count(count($models))
                        ->sequence(...array_map(fn($model) => ['name' => $model], $models))
                )
                ->create();
        }

        // Create Users, Cars with Images and Features
        User::factory()
            ->count(3)
            ->create();

        User::factory()
            ->count(2)
            ->has(
                Car::factory()
                    ->count(50)
                    ->has(
                        CarImage::factory()
                            ->count(5)
                            ->sequence(fn(Sequence $sequence) => ['position' => ($sequence->index % 5) + 1]),
                        'images'
                    )
                    ->hasFeatures(),
                'favouredCars'
            )
            ->create();

        // $this->call([
        //     UsersSeeder::class,
        // ]);
    }
}
