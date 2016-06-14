<?php

class QuestionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::paginate(5);
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
			return View::make("questions.show")->with('question', $newQuestion);
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
		$user = $question->user;
		$answers = $question->answers;
		$languages = $question->languages;
		$votes = DB::table('votes')
			->select(DB::raw('SUM(count) as vote_count'))
			->where('question_id', '=', $id)
			->get();
		$votes = $votes['0'];
		return View::make("questions.show")->with('question', $question)->with('questions', $user)->with('answers', $answers)->with('languages', $languages)->with('votes', $votes);
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
		//
	}


}
