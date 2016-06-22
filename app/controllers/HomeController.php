<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$languages = Language::all();
		$questions = Question::orderBy('created_at', 'desc')
               ->take(10)
               ->get();
		$votes = Vote::all();
		$users = User::all();

		foreach ($users as $user) {
			$score[] =  $this->getUserScore($user->id);
		}

		// Question Language Count
		$languageQs = DB::table('language_question')
				->select(DB::raw('language_id, COUNT(*) as count'))
				->orderBy('count', 'desc')
				->groupBy('language_id')
				->get();


		foreach ($languageQs as $languageQ) {
			foreach($languages as $language) {
				if ($languageQ->language_id == $language->id) {
					$languageQ->language = $language->language;
				}
			}
		}
		

		return View::make('home')->with(['languageQs' => $languageQs, 'questions' => $questions, 'users' => $users, 'score' => $score]);;
	}

	public function showFaq()
	{
		return View::make('faq');
	}


}
