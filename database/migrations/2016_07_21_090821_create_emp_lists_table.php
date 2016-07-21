<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_lists', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('employee_name');
            $table->string('employee_email');
            $table->string('mobile');
            $table->string('doj');
            $table->string('designation');
           
            $table->string('emergency_no');
            $table->string('address');
            $table->string('project');
            $table->string('reporting_manager'); 
            $table->integer('dept_id')->unsigned();
            $table->foreign('dept_id')->references('id')->on('departments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emp_lists');
    }
}
