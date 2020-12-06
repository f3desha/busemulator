<?php

namespace App\Http\Controllers;

use App\Route as BusRoute;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(BusRoute::paginate(20), 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $busRoute = BusRoute::create($request->all());
        return response()->json($busRoute, 201);
    }

    /**
     * Add a point to route.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addPoint(Request $request){
        if(!empty($request->routePointId)){
            $route = BusRoute::find($request->routeId);
            $afterRouteId = null;
            if(!empty($request->routePointId)){
                $afterRoutePoint = $request->afterRoutePoint;
            }
            $route->addNewPointToRoute($request->routePointId, $afterRoutePoint);
        }
        return response()->json($request, 201);
    }

    /**
     * Add a point to route.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deletePoint(Request $request){
        if(!empty($request->routePointId)){
            $route = BusRoute::find($request->routeId);
            $route->removePoint($request->routePointId);
        }
        return response()->json(null, 204);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $route = BusRoute::with('points')->findOrFail($id);
        $response['route'] = $route;
        $response['points'] = $route->buildPointsInOrder();
        return response()->json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusRoute $route)
    {
        $route->update($request->all());
        return response()->json($route, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusRoute $route)
    {
        $route->delete();
        return response()->json(null,204);
    }
}
