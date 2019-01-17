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
        Schema::table('service_user', function(Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services')
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
            $table->dropForeign('role_user_user_id_foreign');
        });
        Schema::table('role_user', function(Blueprint $table) {
            $table->dropForeign('role_user_role_id_foreign');
        });
    }
}
