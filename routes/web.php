<?php

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


Route::controller(CarController::class)->group(function (){
    Route::get("/car",'index');
});


Route::resource('/products', ProductController::class)
    ->only(['index','show']) // Set the methods the controller should apply to.
    ->except(['destroy']); // Set the methods the controller should exclude.
