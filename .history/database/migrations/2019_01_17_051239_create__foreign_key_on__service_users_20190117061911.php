<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyOnServiceUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ServiceUsers', function (Blueprint $table) {
          
                $table->foreign('user_id')->references('id')->on('users')
                            ->onDelete('restrict')
                            ->onUpdate('restrict');
            
        
        });
        Schema::table('serviceusers', function(Blueprint $table) {
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
        Schema::table('ServiceUsers', function (Blueprint $table) {
            //
        });
    }
}
