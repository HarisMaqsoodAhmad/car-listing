<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }
}
