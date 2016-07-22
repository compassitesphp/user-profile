<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpTech extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Emp_tech', function($table)
        {
            $table->integer('emp_id')->unsigned();
            $table->foreign('emp_id')->references('id')->on('emp_lists');
            $table->integer('tech_id')->unsigned();
            $table->foreign('tech_id')->references('id')->on('technologies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Emp_tech');
    }
}
