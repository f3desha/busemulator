<?php

use Illuminate\Database\Seeder;
use App\Route as BusRoute;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route1 = new BusRoute();
        $route1->name = 'Route №12';
        $route1->save();

        $route2 = new BusRoute();
        $route2->name = 'Route №137';
        $route2->save();

        $route3 = new BusRoute();
        $route3->name = 'Route №150';
        $route3->save();
    }
}
