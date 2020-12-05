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
    //Read a single route
    //Edit a single route
    //Add a new route
    //Delete route
    //Add route points
    //Delete route points

    //Browse all buses
    //Read a single bus information
    //Edit a single bus information
    //Add a new bus
    //Delete bus

    //Browse all bus drivers
    //Read a single bus driver info
    //Set regular user as a Bus driver role (ADD)
    //Remove bus driver role from a user (DELETE)
});

Route::group(['middleware' => 'role:driver'], function() {
    //Drive a bus to the next route point
});
