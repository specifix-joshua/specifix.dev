<?php

class QuestionsController extends \BaseController {

    public function __construct()
    {
        // require csrf token for all post, delete, and put actions
        $this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));

        $this->beforeFilter('auth', array(
            'except' => array(
                'index', 
                'show',
                'getPremiumQuestions'
            )
        ));
    }

    public function getQuestionScore($id)
	{
		$questionScore = DB::table('votes')
			->select(DB::raw('SUM(count) as vote_count'))
			->where('question_id', '=', $id)
			->get();
		
		return $score = $questionScore[0]->vote_count;
	}

    public function getPremiumQuestions ()
    {	
    	$premiumQuestions = DB::table('questions')
    		->select(DB::raw('id'))
    		->where('Premium', '=', 'Yes')
    		->orderBy('created_at', 'desc')
    		->get();
		$questions = Question::where('Premium', '=', 'Yes')->paginate(10);
		$score = [];
		$questions = Question::where('Premium', '=', 'Yes')->orderBy('created_at', 'desc')->paginate(10);
		
		if (!empty($premiumQuestions)) {

	    	foreach ($questions as $question) 
	    	{
				$score[] =  $this->getQuestionScore($question->id);
			}
			if($score == null) 
			{
				App::abort(404);
			} 
		} else {
				$score = 0;
		}
    	return View::make('questions.index')->with(['questions' => $questions, 'score' => $score]);
    }


	public function getUserScore($id)
	{
		$answerScore = DB::table('votes')
			->join('answers', 'votes.answer_id', '=', 'answers.id')
			->select(DB::raw('SUM(count) as vote_count'))
			->where('answers.user_id', '=', $id)
			->get();
		
		return $userScore = $answerScore[0]->vote_count;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Input::get('language')) {
			$language = Input::get('language');
			$languageId = DB::table('languages')
				->select(DB::raw('id'))
				->where('language', '=', $language)
				->get();
			if($languageId == null) {
				App::abort(404);
			}
			foreach($languageId as $lang) {
				$language = $lang->id;
			}
			$questions = Language::find($language)->questions()->orderBy('created_at', 'desc')->paginate(10);
			if(empty($questions)) {
				App::abort(404);
			}
		} else {
			$questions = Question::orderBy('created_at', 'desc')->paginate(10);
		}

		$languages = Language::all();
		$score = [];
		foreach ($questions as $question) {
			$score[] =  $this->getQuestionScore($question->id);
		}
		if($score == null) {
			App::abort(404);
		}

		return View::make('questions.index')->with(['questions' => $questions, 'languages' => $languages, 'score' => $score]);
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
	        if (Auth::user()->subscribed()) {
	        	$newQuestion->premium = 'Yes';
	        }
			$newQuestion->save();
			$languages = Input::get('language');
			$newQuestion->languages()->attach($languages);
			Session::flash('successMessage', 'Question has been saved');
			
			$users = DB::table('language_user')
				->select(DB::raw('user_id'))
				->whereIn('language_id', $languages)
				->where('user_id', '!=', Auth::id())
				->distinct()
				->get();

			
			foreach ($users as $user) {
				$user = User::find($user->user_id);
				$user->newNotification()
				    ->withType('Question')
				    ->withSubject('Someone asked a question you might want to answer!')
				    ->withBody("$newQuestion->content")
				    ->regarding($newQuestion)
				    ->deliver();
			}
			Log::info("New Notifications Created!");

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
		$user = Auth::user();
		$question = Question::find($id);
		$premiumQuestions = DB::table('questions')
    		->select(DB::raw('id'))
    		->where('Premium', '=', 'Yes')
    		->get();
    	$isPremium = null;
    	foreach($premiumQuestions as $key => $premiumQuestion)
    	{
    		if($premiumQuestion->id == $question->id)
    		{
    			$isPremium = true;
    		}
    	}
		$userScore = intval($this->getUserScore($user->id));
		$question = Question::find($id);
		if($question == null) {
			App::abort(404);
		}
		$loggedInUser = Auth::user();
		$user = $question->user;
		$answers = $question->answers;
		$languages = $question->languages;
		$ansVoteClassUp = null;
		$ansVoteClassDown = null;
		
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

			if (Auth::check()) {

				if ($answer->vote_value == 1) {
					$ansVoteClassUp = "increment up disabled";
					$ansVoteClassDown = "increment down enabled double";
				} elseif ($answer->vote_value == -1) {
					$ansVoteClassUp = "increment up enabled double";
					$ansVoteClassDown = "increment down disabled";
				} else {
					$ansVoteClassUp = "increment up enabled";
					$ansVoteClassDown = "increment down enabled";
				}
			} else {
				$ansVoteClassUp = "increment up disabled loginNow";
				$ansVoteClassDown = "increment down disabled loginNow";
			}
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
		if (Auth::check()) {

			if ($vote_value == 1) {
				$voteClassUp = "increment up disabled";
				$voteClassDown = "increment down enabled double";
			} elseif ($vote_value == -1) {
				$voteClassUp = "increment up enabled double";
				$voteClassDown = "increment down disabled";
			} else {
				$voteClassUp = "increment up enabled";
				$voteClassDown = "increment down enabled";
			}
		} else {
			$voteClassUp = "increment up disabled loginNow";
			$voteClassDown = "increment down disabled loginNow";
		}

		
		
		$votes = $vote_count;
		
		return View::make("questions.show")->with(['question' => $question,'user' => $user, 'answers' => $answers, 'languages' => $languages, 'votes' => $votes,'vote_value' => $vote_value, 'voted' => $voted, 'vote_id' => $vote_id, 'voteClassUp' => $voteClassUp, 'voteClassDown' => $voteClassDown, 'ansVoteClassUp' => $ansVoteClassUp, 'ansVoteClassDown' => $ansVoteClassDown, 'premiumQuestions' => $premiumQuestions, 'userScore' => $userScore, 'isPremium' => $isPremium]);
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
