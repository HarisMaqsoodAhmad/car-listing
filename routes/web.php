<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/signup', [SignupController::class, 'create'])->name('signup');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::get('/reset-password', [SignupController::class, 'resetPassword'])->name('reset-password');

// Cars resource routes
Route::get('/cars/search', [CarController::class, 'search'])->name('cars.search');
Route::resource('cars', CarController::class);
