<?php

use Illuminate\Database\Seeder;
use App\Bus;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus = new Bus();
        $bus->model = 'Mercedes';
        $bus->route_id = 1;
        $bus->driver_id = 2;
        $bus->max_passengers = 60;
        $bus->save();

        $bus = new Bus();
        $bus->model = 'Audi';
        $bus->route_id = 2;
        $bus->driver_id = 3;
        $bus->max_passengers = 65;
        $bus->save();

        $bus = new Bus();
        $bus->model = 'Bogdan';
        $bus->route_id = 3;
        $bus->driver_id = 4;
        $bus->max_passengers = 300;
        $bus->save();
    }
}
