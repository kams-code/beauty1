<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('description');
            $table->string('image');
            $table->integer('prix');
            $table->string('categori_id');
            $table->boolean('vendable');
            $table->boolean('stockable');
            $table->string('organisation_id')->nullable();;             $table->timestamps();
        });
        Schema::table('commandes', function (Blueprint $table) {
            $table->integer('produit_id')->unsigned()->index()->nullable();
          
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
