<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusDriver as BusDriverResource;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class BusDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driverRole = Role::where('slug','driver')->first();
        $drivers = $driverRole->users;
        return response()->json(BusDriverResource::collection($drivers),200);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driverRole = Role::where('slug','driver')->first();
        $driver = $driverRole->users->where('id',$id)->first();
        if(!is_null($driver)){
            return response()->json(new BusDriverResource($driver, 200),200);
        }
        return response()->json(['Not found'],404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($user){
            if($user->changeRole('driver')){
                return response()->json(new BusDriverResource($user, 200), 200);
            }
        }
        return response()->json(['Not found'],404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            if($user->hasRole('driver')){
                if($user->changeRole('user')){
                    return response()->json(null, 204);
                }
            }
        }
        return response()->json(['Not found'],404);
    }
}
