<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseEnrolledTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolled', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id');
            $table->integer('user_id');
            $table->string('dept')->nullable();
            $table->string('session')->nullable();
           
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
        Schema::drop('enrolled');
    }
}
