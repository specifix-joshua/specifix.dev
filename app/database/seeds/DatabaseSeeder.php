<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('QuestionTableSeeder');
		$this->call('AnswerTableSeeder');
		$this->call('LanguageTableSeeder');
		$this->call('VoteTableSeeder');
		$this->call('LanguageUserTableSeeder');
		$this->call('LanguageQuestionTableSeeder');
	}

}
