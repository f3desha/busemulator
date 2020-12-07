<?php

namespace App\Http\Controllers;

use App\Helpers\JsonHelper;
use App\Http\Resources\BusDriver as BusDriverResource;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class BusDriverController extends Controller
{
    /**
     * Display all drivers.
     * @authenticated
     * @response status=200 scenario=success
        [
        {
        "id": 2,
        "name": "Driver"
        }
        ]
     * @response status=404 scenario="not found"
        [
        "Role not found"
        ]
     * @group Drivers (role)
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driverRole = Role::where('slug','driver')->first();
        if(!is_null($driverRole)){
            $drivers = $driverRole->users;
            return response()->json(BusDriverResource::collection($drivers),200);
        }
        return response()->json(['Role not found'],404);
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
     * Store a newly created resource in storage.
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified driver.
     * @authenticated
     * @urlParam id integer required The ID of the user with Driver role.
     * @response status=200 scenario=success
        {
        "id": 2,
        "name": "Driver"
        }
     * @response status=404 scenario="not found"
        [
        "User not found"
        ]
     * @response status=404 scenario="not found"
        [
        "Role not found"
        ]
     * @group Drivers (role)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driverRole = Role::where('slug','driver')->first();
        if(!is_null($driverRole)){
            $driver = $driverRole->users->where('id',$id)->first();
            if(!is_null($driver)){
                return JsonHelper::success(new BusDriverResource($driver, 200));
            }
            return JsonHelper::notFound('User not found');
        }
        return JsonHelper::notFound('Role not found');
    }

    /**
     * Show the form for editing the specified resource.
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

    }

    /**
     * Change users role to Driver.
     * @authenticated
     * @urlParam id integer required The ID of the user with Driver role.
     * @response status=200 scenario=success
        {
        "id": 3,
        "name": "Regular"
        }
     * @response status=404 scenario="not found"
        [
        "Role not found"
        ]
     * @group Drivers (role)
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if(!is_null($user)){
            if($user->changeRole('driver')){
                return JsonHelper::success(new BusDriverResource($user, 200));
            }
        }
        return JsonHelper::notFound();
    }

    /**
     * Remove Driver role from user.
     * @authenticated
     * @urlParam id integer required The ID of the user with Driver role.
     * @response status=204 scenario=success
        {}
     * @response status=404 scenario="not found"
        {
        "msg": "Not found."
        }
     * @group Drivers (role)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            if($user->hasRole('driver')){
                if($user->changeRole('user')){
                    return JsonHelper::noContent();
                }
            }
        }
        return JsonHelper::notFound();
    }
}
