<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Car;
use App\Models\Maker;
use App\Models\Model;

class HomeController extends Controller
{
    public function index()
    {

        // Create Makers and Models
        $makers = Maker::factory()->count(5)
            ->has(Model::factory()->count(3))
            ->create();

        $data = User::factory()
            ->has(Car::factory()->count(5), 'favouredCars')
            ->create();

        dd($data);

        return view('home.index');
    }
}
