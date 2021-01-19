<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

/**
 * Home controller
 */
class HomeController extends Controller
{
    public function index() {
        // query all records from 'cars' table in car-shop db
        $cars = Car::all();

        return view('home', compact('cars'));
    }
}
