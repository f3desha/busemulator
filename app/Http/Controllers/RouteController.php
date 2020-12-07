<?php

namespace App\Http\Controllers;

use App\Helpers\JsonHelper;
use App\Route as BusRoute;
use Illuminate\Http\Request;
use Validator;

class RouteController extends Controller
{
    /**
     * @group Routes
     * Display all routes.
     * @authenticated
     * @response status=200 scenario=success
        {
        "current_page": 1,
        "data": [
        {
        "id": 1,
        "name": "Route №12",
        "created_at": "2020-12-06 19:08:02",
        "updated_at": "2020-12-06 19:08:02"
        }
        ],
        "first_page_url": "http://homestead.test/api/routes?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://homestead.test/api/routes?page=1",
        "next_page_url": null,
        "path": "http://homestead.test/api/routes",
        "per_page": 20,
        "prev_page_url": null,
        "to": 1,
        "total": 1
        }
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return JsonHelper::success(BusRoute::paginate(20));

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
     * Store a newly created route.
     * @queryParam name string required Name of the route.
     * @response status=201 scenario=success
        {
        "name": "Route №15",
        "updated_at": "2020-12-07 07:33:32",
        "created_at": "2020-12-07 07:33:32",
        "id": 2
        }
     * @response status=400 scenario="validation error"
         {
          "name": "The name may not be greater than 10 characters."
         }
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255'
        ]);
        if($validator->fails()){
            return JsonHelper::validationErrors($validator);
        }


        $busRoute = BusRoute::create($request->all());
        return JsonHelper::successfullyAdded($busRoute);
    }

    /**
     * @group Routes
     * Add a point to route.
     *
     * Route is a data structure that is build base on routes, saving their order.
     *
     * @queryParam routeId int required Id of the route where route point should be added.
     * @queryParam routePointId int required Id of the route point, which should be added to route.
     * @queryParam afterRoutePoint int Id of the route point, after which should be added to route. If not set, new route point will be added as last.
     * @response status=201 scenario=success
        {
        "route": {
        "id": 1,
        "name": "Route №12",
        "created_at": "2020-12-06 19:08:02",
        "updated_at": "2020-12-06 19:08:02"
        },
        "points": [
        {
        "id": 1,
        "street_name": "Svyatoslava Rihtera",
        "street_number": "148",
        "lat": "46.4560308",
        "lng": "30.6844385",
        "pivot": {
        "route_id": "1",
        "route_point_id": "1"
        }
        },
        {
        "id": 3,
        "street_name": "Borisa Derevyanko",
        "street_number": "2",
        "lat": "46.442794",
        "lng": "30.704637",
        "pivot": {
        "route_id": "1",
        "route_point_id": "3"
        }
        },
        {
        "id": 2,
        "street_name": "Gastelo",
        "street_number": "55",
        "lat": "46.450927",
        "lng": "30.684999",
        "pivot": {
        "route_id": "1",
        "route_point_id": "2"
        }
        }
        ]
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addPoint(Request $request){
        if(!empty($request->routePointId)){
            $route = BusRoute::find($request->routeId);
            if(!is_null($route)){
                $afterRouteId = null;
                if(!empty($request->routePointId)){
                    $afterRoutePoint = $request->afterRoutePoint;
                }

                if($route->addNewPointToRoute($request->routePointId, $afterRoutePoint)){
                    $route = BusRoute::with('points')->find($request->routeId);
                    if(!is_null($route)){
                        $response['route'] = $route;
                        $response['points'] = $route->buildPointsInOrder();
                        return JsonHelper::successfullyAdded($response);
                    }
                }
            }
        }
        return JsonHelper::notFound();
    }

    /**
     * @group Routes
     * Delete a route point from route.
     * @authenticated
     * @queryParam routeId int required Id of the route where route point should be deleted from.
     * @queryParam routePointId int required Id of the route point, which should be deleted from route.
     * @response status=204 scenario=success
        {
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Not found"
        }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deletePoint(Request $request){
        if(!empty($request->routePointId)){
            $route = BusRoute::find($request->routeId);
            if(!is_null($route)){
                $route->removePoint($request->routePointId);
                return JsonHelper::notFound();
            }
        }
        return JsonHelper::notFound();
    }

    /**
     * @group Routes
     * Display the specified route.
     * @urlParam id integer required The ID of the route.
     * @response status=200 scenario=success
        {
        "route": {
        "id": 1,
        "name": "Route №12",
        "created_at": "2020-12-06 19:08:02",
        "updated_at": "2020-12-06 19:08:02"
        },
        "points": [
        {
        "id": 1,
        "street_name": "Svyatoslava Rihtera",
        "street_number": "148",
        "lat": "46.4560308",
        "lng": "30.6844385",
        "pivot": {
        "route_id": "1",
        "route_point_id": "1"
        }
        },
        {
        "id": 3,
        "street_name": "Borisa Derevyanko",
        "street_number": "2",
        "lat": "46.442794",
        "lng": "30.704637",
        "pivot": {
        "route_id": "1",
        "route_point_id": "3"
        }
        },
        {
        "id": 2,
        "street_name": "Gastelo",
        "street_number": "55",
        "lat": "46.450927",
        "lng": "30.684999",
        "pivot": {
        "route_id": "1",
        "route_point_id": "2"
        }
        }
        ]
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @authenticated
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $route = BusRoute::with('points')->find($id);
            if(!is_null($route)){
                $response['route'] = $route;
                $response['points'] = $route->buildPointsInOrder();
                return JsonHelper::success($response);
            }
        return JsonHelper::notFound();
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
     * @urlParam id integer required The ID of the route.
     * @queryParam name string required Name of the route.
     * @response status=200 scenario=success
        {
        "id": 4,
        "name": "Route №123",
        "created_at": "2020-12-07 07:52:22",
        "updated_at": "2020-12-07 08:35:57"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);
        if($validator->fails()){
            return JsonHelper::validationErrors($validator);
        }

        $route = BusRoute::find($id);
        if(!is_null($route)){
            $route->update($request->all());
            return JsonHelper::success($route);
        }
        return JsonHelper::notFound();
    }

    /**
     * @group Routes
     * Remove the specified route.
     * @urlParam id integer required The ID of the route.
     * @response status=204 scenario=success
        {}
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @authenticated
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = BusRoute::find($id);
        if(!is_null($route)){
            $route->delete();
            return JsonHelper::noContent();
        }
        return JsonHelper::notFound();
    }
}
