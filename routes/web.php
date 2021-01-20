<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Homepage (PHP)
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * Homepage (JS)
 */
Route::get('/home-js', 'HomeJsController@index')->name('home-js');

/**
 * Car detail page
 */
Route::get('/car-detail/{id}', 'CarController@show')->name('car-detail');