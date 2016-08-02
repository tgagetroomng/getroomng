<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payed_for',function($table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('agent_id');
            $table->integer('property_id');
            $table->dateTime('check_in');
            $table->dateTime('expected_check_out');
            $table->string('status',20);
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
