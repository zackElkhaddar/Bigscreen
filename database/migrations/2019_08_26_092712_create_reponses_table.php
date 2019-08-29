<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('reponse');
            $table->string('user_id');
            $table->unsignedInteger('question_id');
            $table->timestamps();
        });

        Schema::table('reponses', function(Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reponses', function(Blueprint $table) {
            $table->dropForeign(['question_id']);
        });

        Schema::dropIfExists('reponses');
    }
}
