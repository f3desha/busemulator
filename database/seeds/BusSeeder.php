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
        $bus->save();
    }
}
