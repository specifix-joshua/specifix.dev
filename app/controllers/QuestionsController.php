<?php

class QuestionsController extends \BaseController {

    public function __construct()
    {
        // require csrf token for all post, delete, and put actions
        $this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));

        $this->beforeFilter('auth', array(
            'except' => array(
                'index', 
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
		$questions = Question::paginate(10);
		$languages = Language::all();
		return View::make('questions.index')->with(['questions' => $questions, 'languages' => $languages]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$languages = Language::all();
		return View::make('questions.create')->with('languages', $languages);
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
			$newQuestion->content = Input::get('content');
			$newQuestion->user_id = Auth::id();
			$newQuestion->save();
			$languages = Input::get('language');
			$newQuestion->languages()->attach($languages);
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
		
		foreach($answers as $answer)	{
			$answerVotes = DB::table('votes')
				->select(DB::raw('count as vote_count, user_id, id'))
				->where('answer_id', '=', $answer->id)
				->get();
			$vote_count = 0;
			$voted = false;
			$vote_value = 0;
			$vote_id = null;
			foreach ($answerVotes as $vote) {
				$vote_count += $vote->vote_count;
					if (Auth::check() && $voted == false && $loggedInUser->id == $vote->user_id) {
						$voted = true;
						$vote_value = $vote->vote_count;
						$vote_id = $vote->id;
					}
			}
			$answer->vote_count = $vote_count;	
			$answer->voted = $voted;
			$answer->vote_id = $vote_id;
			$answer->vote_value = $vote_value;
		}

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
			if (Auth::check()) {
				if ($voted == false && $loggedInUser->id == $vote->user_id) {
					$voted = true;
					$vote_value = $vote->vote_count;
					$vote_id = $vote->id;
				}
			}
		}
		
		$votes = $vote_count;
		
		return View::make("questions.show")->with(['question' => $question,'user' => $user, 'answers' => $answers, 'languages' => $languages, 'votes' => $votes,'vote_value' => $vote_value, 'voted' => $voted, 'vote_id' => $vote_id]);
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
