<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activities_id')->unsigned();
            $table->foreign('activities_id')->references('id')->on('activities')->onDelete('cascade');
            $table->longText('content_of_question');
            $table->longText('image');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->longText('answer');
            $table->longText('image_r');
            $table->longText('tip');
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
        Schema::dropIfExists('questions');
    }
}
