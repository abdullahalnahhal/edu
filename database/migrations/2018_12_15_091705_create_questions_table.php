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
            $table->string('title', 200);
            $table->string('duration', 10);
            $table->integer('points');
            $table->enum('multi_answers', [0, 1]);
            $table->integer('level_id')->nulable()->unsigned();
            $table->integer('year_id')->nulable()->unsigned();
            $table->integer('term_id')->nulable()->unsigned();
            $table->integer('subject_id')->nulable()->unsigned();
            $table->integer('unit_id')->nulable()->unsigned();
            $table->integer('type_id')->nulable()->unsigned();
            $table->timestamps();
            $table->softDeletes();
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
