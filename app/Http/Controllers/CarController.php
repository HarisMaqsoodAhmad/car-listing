<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\FuelType;
use App\Models\Maker;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::limit(10)
            ->orderBy('published_at', 'desc')
            ->get();

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
        return view('cars.show', ['car' => $car]);
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

    public function search(Request $request)
    {
        $query = Car::where('published_at', '<=', now())
            ->limit(30);

        if ($request->has('sort')) {
            $query->orderBy('price', $request->input('sort', 'asc'));
        } else {
            $query->orderBy('published_at', 'desc');
        }

        $cars = $query->get();
        $totalCars = $query->count();

        return view('cars.search', [
            'cars' => $cars,
            'totalCars' => $totalCars,
        ]);
    }
}
