<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('property',function($table){
            $table->increments('id');
            $table->string('property_type');
            $table->string('property_name');
            $table->integer('agent_id');
            $table->integer('units');
            $table->integer('available_units');
            $table->double('price');
            $table->dateTime('created_at');
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
