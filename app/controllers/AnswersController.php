<?php

class AnswersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store($id)
	{
		$validator = Validator::make(Input::all(), Answer::$rules);
		// attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Answer was not posted');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
			$newAnswer = new Answer();
			$newAnswer->content = Input::get('content');
			$newAnswer->user_id = Auth::id();
			$newAnswer->question_id = $id;
			$newAnswer->save();
			Session::flash('successMessage', 'Answer has been saved');
			Log::info("New Answer Created: id= $newAnswer->id, author= $newAnswer->author");
			return Redirect::back()->with('answers', $newAnswer);
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
		$answers = Answer::find($id);
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
		$answer = Answer::find($id);
		$user = User::find($answer->user_id);
        if (Auth::user()->id == $user->id) {
	        $answer->delete();
	        return Redirect::action('UsersController@index');
	    } else {
	    	Session::flash('errorMessage', 'You cannot delete someone else\'s answer!');
	    	return Redirect::action('UsersController@index');
	    }
	}


}
