<?php

use App\Http\Controllers\CarController;
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
