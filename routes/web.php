<?php

use App\Http\Controllers\CarApiContrller;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about');
});

Route::view('/azer', 'about');
