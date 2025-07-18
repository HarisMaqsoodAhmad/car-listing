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
        // Fetching the latest cars
        $cars = Car::where('published_at', '<=', now())
            ->limit(15)
            ->orderBy('published_at', 'desc')
            ->get();

        return view('home.index', ['cars' => $cars]);
    }
}
