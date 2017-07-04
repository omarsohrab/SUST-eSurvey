<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('question_id');
            $table->string('question_type')->nullable();
            $table->integer('survey_id')->nullable();
            $table->string('res1');
            $table->string('res2')->nullable();
            $table->string('res3')->nullable();
            $table->string('res4')->nullable();
            $table->string('res5')->nullable();
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
        Schema::drop('responses');
    }
}
