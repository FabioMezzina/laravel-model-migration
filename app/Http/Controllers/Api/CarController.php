<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function carJson() {
        $cars = Car::all();

        return response()->json($cars);
    }
}
