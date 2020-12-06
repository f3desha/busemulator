<?php

use Illuminate\Database\Seeder;
use App\RoutePoint;

class RoutePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stop1 = new RoutePoint();
        $stop1->street_name = 'Svyatoslava Rihtera';
        $stop1->street_number = '148';
        $stop1->lat = 46.4560308;
        $stop1->lng = 30.6844385;
        $stop1->save();

        $stop2 = new RoutePoint();
        $stop2->street_name = 'Gastelo';
        $stop2->street_number = '55';
        $stop2->lat = 46.450927;
        $stop2->lng = 30.684999;
        $stop2->save();

        $stop3 = new RoutePoint();
        $stop3->street_name = 'Borisa Derevyanko';
        $stop3->street_number = '2';
        $stop3->lat = 46.442794;
        $stop3->lng = 30.704637;
        $stop3->save();
    }
}
