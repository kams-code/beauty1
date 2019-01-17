<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('foreign_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });*/

       
        Schema::table('service_user', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
        Schema::table('role_user', function(Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('services')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('foreign_keys');
        Schema::table('service_user', function(Blueprint $table) {
            $table->dropForeign('service_user_user_id_foreign');
        });
        Schema::table('service_user', function(Blueprint $table) {
            $table->dropForeign('service_user_service_id_foreign');
        });
    }
}
