<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('image')->nullable();
            
            $table->string('ville');
            $table->string('adresse');
            $table->string('email');
            $table->string('cv');
            $table->integer('telephone');
            $table->integer('services_id');
            $table->integer('user_id');
            $table->string('planning_id');
            $table->string('organisation_id')->nullable();;  
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
        Schema::dropIfExists('personnels');
    }
}
