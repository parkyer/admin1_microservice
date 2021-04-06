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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/parkinglot','ParkingLotController@index');
Route::post('/parkinglot','ParkingLotController@store');
Route::put('/parkinglot/{id}','ParkingLotController@update');
Route::get('/parkinglot/{id}','ParkingLotController@show');
Route::delete('/parkinglot/{id}','ParkingLotController@destroy');