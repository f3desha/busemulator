<?php

namespace App\Http\Controllers;

use App\Helpers\JsonHelper;
use App\RoutePoint;
use App\Http\Resources\RoutePoint as RoutePointResource;
use Illuminate\Http\Request;
use Validator;

class RoutePointController extends Controller
{
    /**
     * Display all Route Points.
     *
     * Route Points is the points, from which Route is build.
     *
     * @authenticated
     * @group Route Points
     * @response status=200 scenario=success
        {
        "current_page": 1,
        "data": [
        {
        "id": 1,
        "street_name": "Svyatoslava Rihtera",
        "street_number": "148",
        "lat": "46.4560308",
        "lng": "30.6844385"
        },
        {
        "id": 2,
        "street_name": "Gastelo",
        "street_number": "55",
        "lat": "46.450927",
        "lng": "30.684999"
        },
        {
        "id": 3,
        "street_name": "Borisa Derevyanko",
        "street_number": "2",
        "lat": "46.442794",
        "lng": "30.704637"
        }
        ],
        "first_page_url": "http://homestead.test/api/route-points?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://homestead.test/api/route-points?page=1",
        "next_page_url": null,
        "path": "http://homestead.test/api/route-points",
        "per_page": 20,
        "prev_page_url": null,
        "to": 3,
        "total": 3
        }
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return JsonHelper::success(RoutePoint::paginate(20));
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
     * Store a newly created Route Point.
     * @authenticated
     * @queryParam street_name string required Name of the route point Street.
     * @queryParam street_number string required Number of the route point Street.
     * @queryParam lat string required Latitude of the route point in format 1.111111
     * @queryParam lng string required Longitude of the route pointin format 1.111111
     * @response status=201 scenario=success
        {
        "street_name": "New street 2",
        "street_number": "1",
        "lat": "46.442794",
        "lng": "30.704637",
        "id": 4
        }
     * @response status=400 scenario="validation error"
        {
        "street_number": [
        "The street number may not be greater than 8 characters."
        ]
        }
     * @group Route Points
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'street_name' => 'required|min:3|max:255',
            'street_number' => 'required|min:3|max:8'
        ]);
        if($validator->fails()){
            return JsonHelper::validationErrors($validator);
        }

        $routePoint = RoutePoint::create($request->all());
        return JsonHelper::successfullyAdded($routePoint);
    }

    /**
     * Display the specified Route Point.
     * @authenticated
     * @group Route Points
     * @urlParam id integer required The ID of the route point.
     * @response status=200 scenario=success
        {
        "id": 1,
        "street_name": "Svyatoslava Rihtera",
        "street_number": "148",
        "lat": "46.4560308",
        "lng": "30.6844385"
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
        $routePoint = RoutePoint::find($id);
            if($routePoint){
                return JsonHelper::success($routePoint);
            }
        return JsonHelper::notFound();
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
     * Update the specified Route Point.
     * @authenticated
     * @urlParam id integer required The ID of the route point.
     * @queryParam street_name string required Name of the route point Street.
     * @queryParam street_number string required Number of the route point Street.
     * @queryParam lat string required Latitude of the route point in format 1.111111
     * @queryParam lng string required Longitude of the route pointin format 1.111111
     * @response status=200 scenario=success
        {
        "id": 2,
        "street_name": "test change",
        "street_number": "222",
        "lat": "1.211",
        "lng": "2.161"
        }
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @group Route Points
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $routePoint = RoutePoint::find($id);
        if(!is_null($routePoint)){
            $routePoint->update($request->all());
            return JsonHelper::success($routePoint);
        }
        return JsonHelper::notFound();
    }

    /**
     * Remove the specified Route Point from storage.
     * @authenticated
     * @group Route Points
     * @urlParam id integer required The ID of the route.
     * @response status=204 scenario=success
         {}
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $routePoint = RoutePoint::find($id);
        if(!is_null($routePoint)){
            $routePoint->delete();
            return JsonHelper::noContent();
        }
        return JsonHelper::notFound();
    }
}
