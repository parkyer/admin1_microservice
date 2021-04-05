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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//   return $request->user();
//});

Route::get('/parkinglot','App\Http\Controllers\ParkingLotController@index');
Route::post('/parkinglot','App\Http\Controllers\ParkingLotController@store');
Route::put('/parkinglot/{id}','App\Http\Controllers\ParkingLotController@update');
Route::get('/parkinglot/{id}','App\Http\Controllers\ParkingLotController@show');
Route::delete('/parkinglot/{id}','App\Http\Controllers\ParkingLotController@destroy');
//Route::resource('/parkinglot', 'App\Http\Controllers\ParkingLotController');