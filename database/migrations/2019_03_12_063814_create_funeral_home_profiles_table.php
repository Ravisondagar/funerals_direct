<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuneralHomeProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funeral_home_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('funeral_home_id')->unsigned();
            $table->foreign('funeral_home_id')->references('id')->on('funeral_homes')->onDelete('cascade');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('business_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('business_logo')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('free_code')->nullable();
            $table->string('free_phone')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->text('city')->nullable();
            $table->unsignedBigInteger('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('locations')->onDelete('cascade');
            $table->text('about')->nullable();
            $table->string('videourl')->nullable();
            $table->string('position')->nullable();
            $table->decimal('latitude', 16,13)->nullable();
            $table->decimal('longitude', 16,13)->nullable();
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
        Schema::dropIfExists('funeral_home_profiles');
    }
}
