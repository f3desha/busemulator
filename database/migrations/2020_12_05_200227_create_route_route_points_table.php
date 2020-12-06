<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteRoutePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_has_route_points', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('route_point_id');
            $table->unsignedBigInteger('previous_route_point_id')->nullable();
            $table->unsignedBigInteger('next_route_point_id')->nullable();

            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('route_point_id')->references('id')->on('route_points')->onDelete('cascade');
            $table->foreign('previous_route_point_id')->references('id')->on('route_points')->onDelete('cascade');
            $table->foreign('next_route_point_id')->references('id')->on('route_points')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_has_route_points');
    }
}
