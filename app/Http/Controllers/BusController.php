<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Helpers\JsonHelper;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Bus as BusResource;
use Validator;

class BusController extends Controller
{
    /**
     * Display all buses.
     * @authenticated
     * @group Buses
     * @response status=200 scenario=success
        {
        "current_page": 1,
        "data": [
        {
        "id": 1,
        "model": "Mercedes"
        }
        ],
        "first_page_url": "http://homestead.test/api/buses?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://homestead.test/api/buses?page=1",
        "next_page_url": null,
        "path": "http://homestead.test/api/buses",
        "per_page": 20,
        "prev_page_url": null,
        "to": 1,
        "total": 1
        }
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return JsonHelper::success(Bus::paginate(20));
    }

    /**
     * Show the form for creating a new resource.
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created bus.
     * @authenticated
     * @group Buses
     * @queryParam model string required Make of the bus.
     * @response status=201 scenario=success
        {
        "model": "Volvo 2",
        "id": 2
        }
     * @response status=400 scenario="validation error"
        {
        "name": "The name may not be greater than 10 characters."
        }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'model' => 'required|min:3|max:255'
        ]);
        if($validator->fails()){
            return JsonHelper::validationErrors($validator);
        }

        $bus = Bus::create($request->all());
        return JsonHelper::successfullyAdded($bus);
    }

    /**
     * Display the specified bus.
     *
     * This endpoint allows you to look the details of a bus.
     *
     * @authenticated
     * @group Buses
     * @urlParam id integer required The ID of the Bus.
     * @response status=200 scenario=success
        {
        "id": 1,
        "model": "Mercedes",
        "driver_id": null,
        "route_id": null
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bus = Bus::find($id);
        if(!is_null($bus)){
            return JsonHelper::success(new BusResource($bus));
        }
        return JsonHelper::notFound();
    }

    /**
     * Show the form for editing the specified resource.
     * @authenticated
     * @group Buses
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {

    }

    /**
     * Update the specified bus.
     * @authenticated
     * @group Buses
     * @urlParam id integer required The ID of the Bus.
     * @queryParam name string required Name of the Bus.
     * @response status=200 scenario=success
        true
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bus = Bus::find($id);
        if(!is_null($bus)){
            return JsonHelper::success($bus->update($request->all()));
        }
        return JsonHelper::notFound();
    }

    /**
     * Remove the specified bus from storage.
     * @authenticated
     * @group Buses
     * @urlParam id integer required The ID of the bus.
     * @response status=204 scenario=success
        {
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Not found"
        }
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = Bus::find($id);
        if(!is_null($bus)){
            $bus->delete();
            return JsonHelper::noContent();
        }
        return JsonHelper::notFound();
    }

    /**
     * Assign driver to bus.
     * @authenticated
     * @group Buses
     * @queryParam driverId int required Id of Driver user
     * @queryParam busId int required Id of bus to assign the driver
     * @response status=201 scenario=success
        {
        "id": 1,
        "model": "Mercedes"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Bus not found"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "User is not a Driver"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Driver not found"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Bus already assigned to this driver"
        }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function assignDriver(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'driverId' => 'required|integer',
            'busId' => 'required|integer'
        ]);
        if($validator->fails()){
            return JsonHelper::validationErrors($validator);
        }

        $user = User::find($request->driverId);
        if($user){
            if($user->hasRole('driver')){
                $bus = Bus::find($request->busId);
                if($bus){
                    if($bus->driver_id == $user->id){
                        return JsonHelper::notFound('Bus already assigned to this driver');
                    }
                    $bus->driver_id = $user->id;
                    $bus->update();
                    return JsonHelper::success($bus);
                }
                return JsonHelper::notFound('Bus not found');
            }
            return JsonHelper::notFound('User is not a Driver');
        }
        return JsonHelper::notFound('Driver not found');
    }

    /**
     * Remove driver from bus.
     * @authenticated
     * @group Buses
     * @queryParam busId int required Id of bus to remove the driver from
     * @response status=204 scenario=success
        {
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Bus not found"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Bus has no driver assigned"
        }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteDriver(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'busId' => 'required|integer'
        ]);
        if($validator->fails()){
            return JsonHelper::validationErrors($validator);
        }

        $bus = Bus::find($request->busId);
        if($bus){
            if(!is_null($bus->driver_id)){
                $bus->driver_id = null;
                $bus->update();
                return JsonHelper::noContent();
            }
            return JsonHelper::notFound('Bus has no driver assigned');
        }
        return JsonHelper::notFound('Bus not found');
    }

    /**
     * Assign route to bus.
     * @authenticated
     * @group Buses
     * @queryParam routeId int required Id of Route to assign to bus
     * @queryParam busId int required Id of bus to assign the driver
     * @response status=201 scenario=success
        {
        "id": 1,
        "model": "Volvo"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Bus not found"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Route not found"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Route already assigned to this bus"
        }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function assignRoute(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'routeId' => 'required|integer',
            'busId' => 'required|integer'
        ]);
        if($validator->fails()){
            return JsonHelper::validationErrors($validator);
        }

        $route = User::find($request->routeId);
        if(!is_null($route)){
            $bus = Bus::find($request->busId);
            if(!is_null($bus)){
                if($bus->route_id == $route->id){
                    return JsonHelper::notFound('Route already assigned to this bus');
                }
                $bus->route_id = $route->id;
                $bus->update();
                return JsonHelper::success($bus);
            }
            return JsonHelper::notFound('Bus not found');
        }
        JsonHelper::notFound('Route not found');
    }

    /**
     * Remove route from bus.
     * @authenticated
     * @group Buses
     * @response status=204 scenario=success
        {
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Bus not found"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Bus has no route assigned"
        }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteRoute(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'busId' => 'required|integer'
        ]);
        if($validator->fails()){
            return JsonHelper::validationErrors($validator);
        }

        $bus = Bus::find($request->busId);
        if($bus){
            if(!is_null($bus->route_id)){
                $bus->route_id = null;
                $bus->update();
                return JsonHelper::noContent();
            }
            return JsonHelper::notFound('Bus has no route assigned');
        }
        return JsonHelper::notFound('Bus not found');
    }

    /**
     * Drive a bus.
     * @authenticated
     * @group Buses
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus $bus
     * @return \Illuminate\Http\Response
     */
    public function drive(Request $request, Bus $bus)
    {
        //If bus exists, has route, driver, and its driver is current user - drive!
        if($bus){
            if(!is_null($bus->route_id)){
                $user = $request->user();
                if($user && $user->hasRole('driver') && $user->id === (int)$bus->driver_id){
                    return response()->json(['You are a driver and riding this bus: '.$bus->model], 200);
                }
            }
        }
    }
}
