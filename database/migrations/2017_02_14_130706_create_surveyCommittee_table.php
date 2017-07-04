<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyCommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable;
            $table->string('dept')->nullable;
            $table->string('course_code')->nullable;
            $table->integer('head_id');
            $table->integer('creator_id');
            $table->integer('member_id')->nullable;

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
        Schema::drop('committee');
    }
}
