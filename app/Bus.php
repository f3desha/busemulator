<?php

namespace App;

use App\Helpers\JsonHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bus extends Model
{
    protected $fillable = [
        'model'
    ];

    protected $hidden = [
        'route_id',
        'driver_id',
        'created_at',
        'updated_at'
    ];

    public function drive(Route $route)
    {
        if(!is_null($route)){
            $bus_places = (int)$this->max_passengers;
            //Init driving process
            $drivingProcess = DB::table('driving_processes')->where('bus_id',$this->id)->first();
            if(is_null($drivingProcess)){
                $init_route_point = $route->points->first();
                if(!is_null($init_route_point)){
                    $current_route_point = RoutePoint::find($init_route_point->id);
                    DB::table('driving_processes')->insert(
                        [
                            'bus_id' => $this->id,
                            'current_route_point_id' => $current_route_point->id,
                            'direction' => 'f',
                            'passengers' => mt_rand(1,$bus_places)
                        ]
                    );
                    $drivingProcess = DB::table('driving_processes')->where('bus_id',$this->id)->first();
                }
            }
            /////////

            //Passengers in and out
            $passengers_left = mt_rand(1,(int)$drivingProcess->passengers);
            $drivingProcess->passengers -= $passengers_left;
            $limit = $bus_places - $drivingProcess->passengers;
            $passengers_entered = mt_rand(1, $limit);
            $drivingProcess->passengers += $passengers_entered;
            //Passengers in and out

            //Ping-pong movement by route
            $current_route_point = RoutePoint::find($drivingProcess->current_route_point_id);
            $linker_route_point = DB::table('route_has_route_points')->where([
                'route_id' => $route->id,
                'route_point_id' => $current_route_point->id
            ])->first();

            if(!is_null($linker_route_point)){
                if($drivingProcess->direction === 'f'){
                    if(!is_null($linker_route_point->next_route_point_id)){
                        $next_point = $linker_route_point->next_route_point_id;
                    } elseif(!is_null($linker_route_point->previous_route_point_id)) {
                        $next_point = $linker_route_point->previous_route_point_id;
                        $drivingProcess->direction = 'b';
                    }
                } else if($drivingProcess->direction === 'b'){
                    if(!is_null($linker_route_point->previous_route_point_id)){
                        $next_point = $linker_route_point->previous_route_point_id;
                    } elseif(!is_null($linker_route_point->next_route_point_id)) {
                        $next_point = $linker_route_point->next_route_point_id;
                        $drivingProcess->direction = 'f';
                    }
                }

                DB::table('driving_processes')
                    ->where(['bus_id' => $this->id])
                    ->update(
                        [
                            'current_route_point_id' => $next_point,
                            'direction' => $drivingProcess->direction,
                            'passengers' => $drivingProcess->passengers
                        ]
                    );
            }

            return JsonHelper::success([
                "current_route_point_name" => $current_route_point->street_name,
                "current_route_point_number" => $current_route_point->street_number,
                "passengers_out" => $passengers_left,
                "passengers_in" => $passengers_entered,
                "passengers_in_the_bus" => $drivingProcess->passengers,
                "max_passengers_in_the_bus" => (int)$bus_places,
                "description" => "You arrived to the route point $current_route_point->street_name $current_route_point->street_number. Passengers left: $passengers_left. Passengers entered: $passengers_entered. Passengers riding in the bus: {$drivingProcess->passengers}",
            ]);

        }
    }

}
