<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function show($id) {
        // query the specific record matching the id
        $car = Car::find($id);

        return view('car-detail', compact('car'));
    }
}
