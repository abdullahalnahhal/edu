<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeForeignKeysInExamDescriptionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exam_description_details', function (Blueprint $table) {
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('questions_types')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam_description_details', function (Blueprint $table) {
            //
        });
    }
}
