<?php

use Illuminate\Http\Request;

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

Route::get('/weather/days', 'ForecastController@days');
Route::get('/weather/cities/{forecast}', 'ForecastController@cities');
Route::get('/city', 'CityController@index');