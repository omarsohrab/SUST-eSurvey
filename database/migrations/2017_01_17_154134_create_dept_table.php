<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('full_name')->nullable();
            $table->string('dept_name')->unique();
            $table->integer('head_id')->nullable();
            $table->integer('school_id')->nullable();
           
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
        Schema::drop('dept');
    }
}
