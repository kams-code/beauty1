<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('organisation_id')->nullable();;             $table->timestamps();
        });

        Schema::table('plannings', function (Blueprint $table) {
            $table->integer('jour_id')->nullable()->unsigned()->index();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jours');
    }
}
