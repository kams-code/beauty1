<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plannings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('jour');
            $table->time('heureDeb');
            $table->time('heureFin');
            $table->date('dateDeb');
            $table->date('dateFin');
        });
        Schema::table('plannings', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index()->nullable();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plannings');
    }
}
