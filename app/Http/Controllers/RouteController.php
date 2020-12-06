<?php

namespace App\Http\Controllers;

use App\Route as BusRoute;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * @group Routes
     * Display all routes.
     * @authenticated
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(BusRoute::paginate(20), 200);

    }

    /**
     * @group Routes
     * Show the form for creating a new resource.
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @group Routes
     * Store a newly created resource in storage.
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $busRoute = BusRoute::create($request->all());
        return response()->json($busRoute, 201);
    }

    /**
     * @group Routes
     * Add a point to route.
     * @authenticated
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
     * @group Routes
     * Delete a route point from route.
     * @authenticated
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
     * @group Routes
     * Display the specified route.
     * @authenticated
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
     * @group Routes
     * Show the form for editing the specified resource.
     * @authenticated
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * @group Routes
     * Update the specified route.
     * @authenticated
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
     * @group Routes
     * Remove the specified route.
     * @authenticated
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusRoute $route)
    {
        $route->delete();
        return response()->json(null,204);
    }
}
