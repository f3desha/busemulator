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

        $stop4 = new RoutePoint();
        $stop4->street_name = 'Deribasovskaya';
        $stop4->street_number = '1';
        $stop4->lat = 46.4832407;
        $stop4->lng = 30.7425574;
        $stop4->save();

        $stop5 = new RoutePoint();
        $stop5->street_name = 'Ekaterininskaya';
        $stop5->street_number = '2';
        $stop5->lat = 46.486858;
        $stop5->lng = 30.7356728;
        $stop5->save();

        $stop6 = new RoutePoint();
        $stop6->street_name = 'Pushkinskaya';
        $stop6->street_number = '3';
        $stop6->lat = 46.4845265;
        $stop6->lng = 30.7421302;
        $stop6->save();

        $stop4 = new RoutePoint();
        $stop4->street_name = 'Arhitektorskay';
        $stop4->street_number = '15';
        $stop4->lat = 46.3841834;
        $stop4->lng = 30.7181107;
        $stop4->save();

        $stop5 = new RoutePoint();
        $stop5->street_name = 'Koroleva';
        $stop5->street_number = '23';
        $stop5->lat = 46.4035605;
        $stop5->lng = 30.7204637;
        $stop5->save();

        $stop6 = new RoutePoint();
        $stop6->street_name = 'Inglezi';
        $stop6->street_number = '25';
        $stop6->lat = 46.424645;
        $stop6->lng = 30.7039613;
        $stop6->save();
    }
}
