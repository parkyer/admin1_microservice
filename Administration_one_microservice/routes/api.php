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
Route::get('/parkinglot/getOwnerParkingLots/{id_owner}','ParkingLotController@getOwnerParkingLots');
Route::get('/parkinglot','ParkingLotController@index');
Route::post('/parkinglot','ParkingLotController@store');
Route::put('/parkinglot/update/{id}','ParkingLotController@update');
Route::get('/parkinglot/getById/{id}','ParkingLotController@show');
Route::delete('/parkinglot/{id}','ParkingLotController@destroy');
