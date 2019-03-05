<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('valeur');
            $table->string('type');
            $table->date("datedebut");
            $table->date("datefin");
            $table->string('etat')->nullable();
            $table->string('services_id')->nullable();
            $table->string('clients_id')->nullable();
            $table->string('formules_id')->nullable();
            $table->string('organisation_id')->nullable();           $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
