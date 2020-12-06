<?php

namespace App\Http\Resources;

use App\Route as BusRoute;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class Bus extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $response =[
            'id' => $this->id,
            'model' => $this->model,
            'driver_id' => null,
            'route_id' => null
        ];

        if(!is_null($this->driver_id)){
            $user = User::find($this->driver_id);
            $response['driver_id'] = $user->id;
            $response['driver_name'] = $user->name;
        }

        if(!is_null($this->route_id)){
            $route = BusRoute::find($this->route_id);
            $response['route_id'] = $route->id;
            $response['route_name'] = $route->name;
        }

        return $response;
    }
}
