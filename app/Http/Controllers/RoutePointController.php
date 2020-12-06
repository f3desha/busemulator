<?php

namespace App\Http\Controllers;

use App\RoutePoint;
use App\Http\Resources\RoutePoint as RoutePointResource;
use Illuminate\Http\Request;

class RoutePointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(RoutePoint::paginate(20), 200);
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
        $routePoint = RoutePoint::create($request->all());
        return response()->json($routePoint, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoutePoint  $routePoint
     * @return \Illuminate\Http\Response
     */
    public function show(RoutePoint $routePoint)
    {
        return response()->json($routePoint,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoutePoint  $routePoint
     * @return \Illuminate\Http\Response
     */
    public function edit(RoutePoint $routePoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoutePoint  $routePoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoutePoint $routePoint)
    {
        $routePoint->update($request->all());
        return response()->json($routePoint, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoutePoint  $routePoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoutePoint $routePoint)
    {
        $routePoint->delete();
        return response()->json(null,204);
    }
}
