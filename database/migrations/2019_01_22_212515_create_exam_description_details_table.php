<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamDescriptionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_description_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_id')->unsigned()->nullable();
            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('unit_id')->unsigned()->nullable();
            $table->string('max_points', 11)->nullable();
            $table->string('min_points', 11)->nullable();
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
        Schema::dropIfExists('exam_description_details');
    }
}
