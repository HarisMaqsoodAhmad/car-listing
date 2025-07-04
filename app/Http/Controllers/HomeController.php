<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index')
            ->with('title', 'Home')
            ->with('job', '<b>Software Engineer</b>');
    }
}
