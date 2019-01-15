<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->integer('service_id')->unsigned()->index();
          
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->integer('service_id')->unsigned()->index();
          
        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->integer('service_id')->unsigned()->index();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
