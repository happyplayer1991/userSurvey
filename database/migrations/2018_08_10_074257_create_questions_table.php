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
        // Add
            $table->integer('survey_id')->unsigned();
            $table->text('description')->nullable(false);
            $table->enum('type', ['check', 'free']);
            $table->enum('status', ['activate', 'not_activate'])->default('activate');
        
        // Foreign Key
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');

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
        });
        
        Schema::dropIfExists('questions');
    }
}
