<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('survey_id');
            $table->string('survey_title');
            $table->string('description')->nullable();
            $table->string('commity_id');
            
            $table->string('course_code');
            $table->integer('creator_id');
            $table->string('is_template');
            $table->timestamps();
            $table->date('expired');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surveys');
    }
}
