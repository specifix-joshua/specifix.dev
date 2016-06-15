<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('language_question', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_id')->unsigned();
		    $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
		    $table->integer('language_id')->unsigned();
		    $table->foreign('language_id')->references('id')->on('languages');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('language_question');
	}

}
