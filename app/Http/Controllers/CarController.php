<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();

        // // Create new car
        // $car = new Car();
        // $car->year = 2013;
        // $car->price = 1533;
        // $car->vin = 5;
        // $car->mileage = 1;
        // $car->address = 1;
        // $car->phone = 1;
        // $car->description = "Test";
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->city_id = 1;
        // $car->user_id = 1;
        // $car->maker_id = 2;
        // $car->model_id = 1;
        // $car->published_at = now();

        $carData = array(
            'year' => 2021,
            'price' => 10093,
            'vin' => 66,
            'mileage' => 31,
            'address' => 51,
            'phone' => 81,
            'description' => 1,
            'car_type_id' => 2,
            'fuel_type_id' => 3,
            'city_id' => 3,
            'user_id' => 1,
            'maker_id' => 3,
            'model_id' => 4,
            'published_at' => now(),
        );

        $car = Car::create($carData);

        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }

    public function search()
    {
        return view('cars.search');
    }
}
