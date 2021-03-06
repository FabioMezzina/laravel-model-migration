<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * Api namespace route wrapper
 */
Route::namespace('Api')->group(function () {
    // return bikes db JSON
    Route::get('bikes', 'BikeController@bikeJson');

    // return cars db JSON
    Route::get('cars', 'CarController@carJson');
});