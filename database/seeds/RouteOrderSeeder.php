<?php

use Illuminate\Database\Seeder;
use App\Route as BusRoute;

class RouteOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route = BusRoute::find(1);
        $route->addNewPointToRoute(1);

        $route = BusRoute::find(1);
        $route->addNewPointToRoute(2);
        $route->addNewPointToRoute(3);

    }
}
