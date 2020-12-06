<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Route extends Model
{
    protected $fillable = ['name'];

    protected $hidden = ['points'];

    public function points()
    {
        return $this->belongsToMany(RoutePoint::class,'route_has_route_points');
    }

    public function addNewPointToRoute(int $pointId, int $afterRoutePoint = null)
    {
        $point = RoutePoint::find($pointId);
        if(!is_null($point)){
            if($this->points->isEmpty()){
                $this->addFirstPoint($point);
            } else {
                if(is_null($afterRoutePoint)){
                    $last = $this->points->last();
                    $afterRoutePoint = $last->id;
                }
                $this->addPointAfter($afterRoutePoint, $point);
            }
        }
    }

    public function removePoint(int $route_point_id){
        $point = DB::table('route_has_route_points')->where([
            'route_id' => $this->id,
            'route_point_id' => $route_point_id
        ])->get()->first();
        //Find prev point

        DB::table('route_has_route_points')->where([
            'route_id' => $this->id,
            'route_point_id' => $point->previous_route_point_id
        ])->update(['next_route_point_id' => $point->next_route_point_id]);

        DB::table('route_has_route_points')->where([
            'route_id' => $this->id,
            'route_point_id' => $point->next_route_point_id
        ])->update(['previous_route_point_id' => $point->previous_route_point_id]);

        DB::table('route_has_route_points')->where([
            'route_id' => $this->id,
            'route_point_id' => $route_point_id
        ])->delete();
    }

    public function addFirstPoint(RoutePoint $new_point)
    {
        DB::table('route_has_route_points')->insert(
            [
                'route_id' => $this->id,
                'route_point_id' => $new_point->id,
                'previous_route_point_id' => null,
                'next_route_point_id' => null
            ]
        );
    }

    public function addPointAfter(int $route_point_id, RoutePoint $new_point)
    {
            //Найти последнюю точку. Выяснить последняя ли она или промежуточная
            $point = DB::table('route_has_route_points')->where([
                'route_id' => $this->id,
                'route_point_id' => $route_point_id
            ])->get()->first();
            if(!is_null($point)){
                //Если она промежуточная, изменить указатель прев следующей точки на новую точку
                $point_after = $point->next_route_point_id;
                if($point_after !== null){
                    DB::table('route_has_route_points')->where([
                        'route_id' => $this->id,
                        'route_point_id' => $point_after
                    ])->update(['previous_route_point_id' => $new_point->id]);
                }
                //Изменить указатель некст последней точки на новую точку
                DB::table('route_has_route_points')->where([
                    'route_id' => $this->id,
                    'route_point_id' => $route_point_id
                ])->update(['next_route_point_id' => $new_point->id]);

                //Вставить связь на новую точку
                DB::table('route_has_route_points')->insert(
                    [
                        'route_id' => $this->id,
                        'route_point_id' => $new_point->id,
                        'previous_route_point_id' => $route_point_id,
                        'next_route_point_id' => $point_after
                    ]
                );
            }
    }

    public function buildPointsInOrder()
    {
        //First point always has previous point null
        $ordered_points = [];
        $order = [];

        $points = DB::table('route_has_route_points')->where('route_id',$this->id)->get();
        if($points->isNotEmpty()){
            $first = $points->where('previous_route_point_id',null)->first();
            $order[] = $first;
            $iterator = $first->next_route_point_id;
            if(!is_null($iterator)){
                foreach ($points as $point){
                    $next = $points->where('route_point_id',$iterator)->first();
                    $iterator = $next->next_route_point_id;
                    $order[] = $next;
                    if($iterator === null){
                        break;
                    }
                }
            }

            foreach ($order as $point){
                if(!is_null($found = $this->points->where('id',$point->route_point_id)->first())){
                    $ordered_points[] = $found;
                }
            }
        }

        return $ordered_points;
    }
}
