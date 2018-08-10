<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
        // Add
            $table->integer('survey_id')->unsigned();
            $table->integer('quesiton_id')->unsigned();
            $table->integer('quesiton_option_id')->unsigned();
            $table->text('free_text');
                
        // Foreign Key
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
            $table->foreign('quesiton_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('quesiton_option_id')->references('id')->on('question_options')->onDelete('cascade');

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
            $table->dropForeign('survey_id');
            $table->dropForeign('question_id');
            $table->dropForeign('quesiton_option_id');
        });
        
        Schema::dropIfExists('answers');
    }
}
