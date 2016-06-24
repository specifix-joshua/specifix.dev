<?php

class AnswersController extends \BaseController {

        public function __construct()
        {
            // require csrf token for all post, delete, and put actions
            $this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));

            $this->beforeFilter('auth', array(
                'except' => array( 
                    'show'
                )
            ));
        }

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
	public function store()
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
			$newAnswer->question_id = Input::get('question_id');
			$newAnswer->save();
			Session::flash('successMessage', 'Answer has been saved');
			Log::info("New Answer Created: id= $newAnswer->id, author= $newAnswer->author");
	    	$answerer = Auth::user();
	    	$answererUsername = $answerer->username;
			$question = Question::find($newAnswer->question_id);
			$question_user = $question->user_id;
			$user = User::find($question_user);
			if($user != Auth::user()){
				$user->newNotification()
				    ->withType('Answer')
				    ->withSubject('Answer for: "' . substr($question->title, 0, 25) . '..."')
				    ->withBody("$newAnswer->content")
				    ->regarding($question)
				    ->deliver();
			}	
			Log::info("New Notification Created!");
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
		$answerUser = $answer->user_id;
        if (Auth::user()->id == $answerUser) {
	        $answer->delete();
	        return Redirect::back();
	    } else {
	    	Session::flash('errorMessage', 'You cannot delete someone else\'s answer!');
	    	return Redirect::back();
	    }
	}


}
