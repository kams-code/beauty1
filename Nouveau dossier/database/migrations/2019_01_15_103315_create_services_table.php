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
            $table->string('code');
            $table->string('nom');
            $table->string('description');
            $table->string('image');
            $table->integer('montant');
            $table->boolean('is_promote');
            $table->string('codepromo')->nullable();
            $table->integer('id_ticket')->nullable();
            $table->string('users_id')->nullable();
            $table->string('organisation_id')->nullable();;             $table->timestamps();
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
