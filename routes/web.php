<?php

use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about');
});

Route::view('/azer', 'about');


Route::get('/sum/{a}/{b}',[MathController::class,'sum'])
    ->whereNumber(['a','b']);
Route::get('/subtract/{a}/{b}',[MathController::class,'subtract'])
    ->whereNumber(['a','b']);
