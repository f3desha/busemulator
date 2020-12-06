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

    //Add new point to route
    Route::post('/routes/add-point', 'RouteController@addPoint');
    //Remove point from route
    Route::delete('/routes/delete-point', 'RouteController@deletePoint');


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


    //Browse all bus drivers
    Route::get('/bus-drivers', 'BusDriverController@index');
    //Read a single bus driver info
    Route::get('/bus-drivers/{id}', 'BusDriverController@show');
    //Set regular user as a Bus driver role (ADD)
    Route::put('/bus-drivers/{id}', 'BusDriverController@update');
    //Remove bus driver role from a user (DELETE)
    Route::delete('/bus-drivers/{id}', 'BusDriverController@destroy');


    //Assign new driver to bus
    Route::post('/buses/assign-driver', 'BusController@assignDriver');
    //Remove driver from bus
    Route::delete('/buses/delete-driver', 'BusController@deleteDriver');
    //Assign route to a bus
    Route::post('/buses/assign-route', 'BusController@assignRoute');
    //Remove route from a bus
    Route::delete('/buses/delete-route', 'BusController@deleteRoute');


    //Browse all buses
    Route::get('/buses', 'BusController@index');
    //Read a single bus information
    Route::get('/buses/{bus}', 'BusController@show');
    //Edit a single bus information
    Route::put('/buses/{bus}', 'BusController@update');
    //Add a new bus
    Route::post('/buses', 'BusController@store');
    //Delete bus
    Route::delete('/buses/{bus}', 'BusController@destroy');

});

Route::group(['middleware' => 'role:driver'], function() {
    //Drive a bus to the next route point
    Route::get('/buses/{bus}/drive', 'BusController@drive');

});

