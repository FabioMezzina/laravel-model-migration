<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeJsController extends Controller
{
    public function index() {
        return view('home-js');
    }
}
