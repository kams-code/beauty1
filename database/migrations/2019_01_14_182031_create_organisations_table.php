<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('email');
            $table->string('identifiant');
            $table->string('pays');
            $table->string('ville');
            $table->string('image');
            $table->string('description');
            $table->string('adresse');
            $table->integer('telephone');
            $table->time('heureouverture')->nullable();;
            $table->time('heurefermeture')->nullable();
            $table->time('tempstransition')->nullable();
             $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->integer('organisation_id')->default('0');;
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
