<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('units', function (Blueprint $table) {
            // $table->foreign('level_id')->references('id')->on('levels');
            // $table->foreign('year_id')->references('id')->on('years');
            // $table->foreign('term_id')->references('id')->on('terms');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('units', function (Blueprint $table) {
            $table->dropForeign([/*'level_id', 'year_id', 'term_id',*/ 'subject_id']);
        });
    }
}
