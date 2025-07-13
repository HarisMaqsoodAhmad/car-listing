<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $makers = Maker::factory()
            ->count(1)
            ->hasModels(1, ['name' => 'Model 1'])
            ->create();

        dd($makers);

        return view('home.index');
    }
}
