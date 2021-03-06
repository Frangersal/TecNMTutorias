<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->engine = 'InnoDB';
            $table->id();            
            $table->string('name');       
            //$table->boolean('option');
            
            $table->unsignedBigInteger('form_id');
            $table->foreign('form_id')->references('id')->on('forms');

            $table->unsignedBigInteger('answer_type_id');
            $table->foreign('answer_type_id')->references('id')->on('answers_types');

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
