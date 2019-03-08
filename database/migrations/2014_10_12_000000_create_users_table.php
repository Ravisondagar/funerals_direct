<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->unique();
            $table->enum('role', ['admin','customer','member']);
            $table->string('password');
            $table->string('company_name')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('suburb')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('website')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->tinyInteger('is_demo')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
