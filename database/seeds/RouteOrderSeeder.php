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

        //SORRY FOR THAT! I didnt find how to dynamicly update points relationships. Thats why I find instance after each
        // route point added.
        $route1 = BusRoute::find(1);
        $route1->addNewPointToRoute(1);
        $route1 = BusRoute::find(1);
        $route1->addNewPointToRoute(2);
        $route1 = BusRoute::find(1);
        $route1->addNewPointToRoute(3);

        $route2 = BusRoute::find(2);
        $route2->addNewPointToRoute(4);
        $route2 = BusRoute::find(2);
        $route2->addNewPointToRoute(5);
        $route2 = BusRoute::find(2);
        $route2->addNewPointToRoute(6);

        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(9);
        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(8);
        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(3);
        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(4);
        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(5);
        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(6);
        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(7);
        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(2);
        $route3 = BusRoute::find(3);
        $route3->addNewPointToRoute(1);

    }
}
