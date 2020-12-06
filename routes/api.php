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

Route::group(['middleware' => 'role:admin'], function() {
    //Browse all routes
    Route::get('/routes', 'RouteController@index');
    //Read a single route
    Route::get('/routes/{id}', 'RouteController@show');
    //Edit a single route
    Route::put('/routes/{route}', 'RouteController@update');
    //Add a new route
    Route::post('/routes', 'RouteController@store');
    //Delete route
    Route::delete('/routes/{route}', 'RouteController@destroy');


    //Browse all route points
    Route::get('/route-points', 'RoutePointController@index');
    //Read single route point
    Route::get('/route-points/{routePoint}', 'RoutePointController@show');
    //Add route point
    Route::post('/route-points', 'RoutePointController@store');
    //Edit route point
    Route::put('/route-points/{routePoint}', 'RoutePointController@update');
    //Delete route points
    Route::delete('/route-points/{routePoint}', 'RoutePointController@destroy');

    //Browse all buses
    //Read a single bus information
    //Edit a single bus information
    //Add a new bus
    //Delete bus

    //Browse all bus drivers
    Route::get('/bus-drivers', 'BusDriverController@index');
    //Read a single bus driver info
    Route::get('/bus-drivers/{id}', 'BusDriverController@show');
    //Set regular user as a Bus driver role (ADD)
    Route::put('/bus-drivers/{id}', 'BusDriverController@edit');
    //Remove bus driver role from a user (DELETE)
    Route::delete('/bus-drivers/{id}', 'BusDriverController@destroy');
});

Route::group(['middleware' => 'role:driver'], function() {
    //Drive a bus to the next route point

});

