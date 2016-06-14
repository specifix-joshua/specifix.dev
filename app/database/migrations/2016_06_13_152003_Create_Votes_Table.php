<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('count');
			$table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
		    $table->integer('question_id')->unsigned()->nullable();
		    $table->foreign('question_id')->references('id')->on('questions');
		    $table->integer('answer_id')->unsigned()->nullable();
		    $table->foreign('answer_id')->references('id')->on('answers');
			$table->unique(['user_id', 'question_id']);
			$table->unique(['user_id', 'answer_id']);
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
		Schema::drop('votes');
	}

}
