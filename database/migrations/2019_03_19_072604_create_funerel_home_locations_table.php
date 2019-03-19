<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunerelHomeLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funerel_home_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('funeral_home_id')->unsigned();
            $table->foreign('funeral_home_id')->references('id')->on('funeral_homes')->onDelete('cascade');
            $table->unsignedBigInteger('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->unsignedBigInteger('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('locations')->onDelete('cascade');
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
        Schema::dropIfExists('funerel_home_locations');
    }
}
