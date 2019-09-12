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
            $table->string('corps', 255);
            $table->enum('type', array('A', 'B', 'C'));
            $table->string('choix')->nullable();
            $table->string('is_email')->nullable()->default(false);
            $table->unsignedInteger('sondage_id');
        });

        Schema::table('questions', function(Blueprint $table) {
            $table->foreign('sondage_id')->references('id')->on('sondages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function(Blueprint $table) {
            $table->dropForeign(['sondage_id']);
        });

        Schema::dropIfExists('questions');
    }
}
