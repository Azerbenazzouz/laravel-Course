<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __invoke(Request $request)
    {
        return "__invokable";
    }

    public function index()
    {
        return 'Index method from CarController';
    }
}
