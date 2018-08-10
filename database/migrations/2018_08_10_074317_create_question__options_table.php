<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_options', function (Blueprint $table) {
            $table->increments('id');
        // Add
            $table->integer('question_id')->unsigned();
            $table->string('description', 100)->nullable(false);
            $table->enum('type', ['check', 'free']);
            $table->integer('link_question_id')->unsigned();
        
        // Foreign Key
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('link_question_id')->references('id')->on('questions')->onDelete('cascade');

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
        Schema::table('questions', function(Blueprint $table) {
            $table->dropForeign('question_id');
            $table->dropForeign('link_question_id');
        });
        
        Schema::dropIfExists('question_options');
    }
}
