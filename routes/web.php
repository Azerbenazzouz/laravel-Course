<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
