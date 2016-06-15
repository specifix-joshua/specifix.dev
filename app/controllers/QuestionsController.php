<?php

class QuestionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::paginate(10);
		return View::make('questions.index')->with('questions', $questions);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('questions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Question::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Question was not saved');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
			$newQuestion = new Question();
			$newQuestion->title = Input::get('title');
			$newQuestion->language = Input::get('language');
			$newQuestion->content = Input::get('content');
			$newQuestion->user_id = Auth::id();
			$newQuestion->save();
			Session::flash('successMessage', 'Question has been saved');
			Log::info("New Question Created: id= $newQuestion->id, title= $newQuestion->title, author= $newQuestion->author, categories= $newQuestion->categories");
			return Redirect::action("QuestionsController@index");
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$question = Question::find($id);
		$loggedInUser = Auth::user();
		$user = $question->user;
		$answers = $question->answers;
		$languages = $question->languages;
		$votes = DB::table('votes')
			->select(DB::raw('count as vote_count, user_id, id'))
			->where('question_id', '=', $id)
			->get();
		$vote_count = 0;
		$voted = false;
		$vote_value = 0;
		$vote_id = null;
		foreach ($votes as $vote) {
			$vote_count += $vote->vote_count;
			if ($voted == false && $loggedInUser->id == $vote->user_id) {
				$voted = true;
				$vote_value = $vote->vote_count;
				$vote_id = $vote->id;
			}
		}
		
		$votes = $vote_count;
		
		return View::make("questions.show")->with('question', $question)->with('user', $user)->with('answers', $answers)->with('languages', $languages)->with('votes', $votes)->with('vote_value', $vote_value)->with('voted', $voted)->with('vote_id', $vote_id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$question = Question::find($id);
		$user = User::find($question->user_id);
		if (Auth::user()->id == $user->id) {
	        $question->delete();
	        return Redirect::back();
	    } else {
	    	Session::flash('errorMessage', 'You cannot delete someone else\'s question!');
	    	return Redirect::back();
	    }
	}
}
