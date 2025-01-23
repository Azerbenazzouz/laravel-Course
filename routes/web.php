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


Route::controller(CarController::class)->group(function (){
    Route::get("/car",'index');
});


//Route::resource('/products', ProductController::class)
//    ->only(['index','show']) // Set the methods the controller should apply to.
//    ->except(['destroy']); // Set the methods the controller should exclude.


//Route::apiResource('/products', ProductController::class);
//
//Route::apiResource('cars',CarApiContrller::class);

Route::apiResources([
    'cars' => CarApiContrller::class,
    'products' => ProductController::class
]);
