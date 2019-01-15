<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JoinTableCommandeswithuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('commandes', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();
          
        });
        Schema::table('planning', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
