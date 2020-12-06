<?php

namespace App\Http\Controllers;

use App\Bus;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Bus as BusResource;

class BusController extends Controller
{
    /**
     * Display all buses.
     * @authenticated
     * @group Buses
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Bus::paginate(20), 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bus = Bus::create($request->all());
        return response()->json($bus, 201);
    }

    /**
     * Display the specified bus.
     *
     * This endpoint allows you to look the details of a bus.
     *
     * @authenticated
     * @group Buses
     * @urlParam bus integer required The ID of the Bus.
     * @param  \App\Bus $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        return response()->json(new BusResource($bus), 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
        return response()->json($bus->update($request->all()), 200);
    }

    /**
     * Remove the specified bus from storage.
     * @authenticated
     * @group Buses
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus $bus)
    {
        $bus->delete();
        return response()->json(null, 204);
    }

    /**
     * Assign driver to bus.
     * @authenticated
     * @group Buses
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function assignDriver(Request $request)
    {
        $user = User::find($request->driverId);
        if($user && $user->hasRole('driver')){
            $bus = Bus::find($request->busId);
            if($bus){
                $bus->driver_id = $user->id;
                $bus->update();
                return response()->json($bus, 200);
            }
        }
    }

    /**
     * Remove driver from bus.
     * @authenticated
     * @group Buses
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteDriver(Request $request)
    {
        $bus = Bus::find($request->busId);
        if($bus){
            $bus->driver_id = null;
            $bus->update();
            return response()->json(null, 204);
        }
    }

    /**
     * Assign route to bus.
     * @authenticated
     * @group Buses
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function assignRoute(Request $request)
    {
        $route = User::find($request->routeId);
        if($route){
            $bus = Bus::find($request->busId);
            if($bus){
                $bus->route_id = $route->id;
                $bus->update();
                return response()->json($bus, 200);
            }
        }
    }

    /**
     * Remove route from bus.
     * @authenticated
     * @group Buses
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteRoute(Request $request)
    {
        $bus = Bus::find($request->busId);
        if($bus){
            $bus->route_id = null;
            $bus->update();
            return response()->json(null, 204);
        }
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
