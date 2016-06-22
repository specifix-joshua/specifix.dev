<?php

class UsersController extends \BaseController {

    public function __construct()
    {
        // require csrf token for all post, delete, and put actions
        $this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));
        
        $this->beforeFilter('auth', array(
            'except' => array(
                'index', 
                'show',
                'store',
                'doLogin',
                'subscribe'
            )
        ));
    }

	public function getUserScore($id)
	{
		$answerScore = DB::table('votes')
			->join('answers', 'votes.answer_id', '=', 'answers.id')
			->select(DB::raw('SUM(count) as vote_count'))
			->where('answers.user_id', '=', $id)
			->get();
		
		return $score = $answerScore[0]->vote_count;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(18);
		foreach ($users as $user) {
			$score[] =  $this->getUserScore($user->id);
		}
		return View::make('users.index')->with(['users' => $users, 'score' => $score]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Input::get('password') == Input::get('confirmPassword'))
		{
			$user = new User();
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$validator = Validator::make(Input::all(), User::$rules);
		}
		else
		{
			Session::flash('errorMessage', 'Match those passwords!');
			return Redirect::back()->withInput();
		}

		if($validator->fails()) 
		{
			Session::flash('errorMessage', 'There was an error with your signup!');
	        return Redirect::back()->withInput()->withErrors($validator);
		}
		else if ($user->save()) 
		{
			Session::flash('successMessage', 'You have successfully signed up!');
			Log::info("New User Created: id= $user->id, title= $user->name, email= $user->email");
			return Redirect::back();
        
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
		$user = User::find($id);
		$languages = Language::all();
		
		$userLanguagesIds = $user->languages()->get()->map(function($language) {
			return $language->id;
		});
		$questions = Question::all();
		$relevantQs = [];
		
		foreach ($questions as $question) {
			if ($question->user_id != $id){
				$questionLanguagesIds = $question->languages()->get()->map(function($language) {
				return $language->id;
				});
				foreach($questionLanguagesIds as $qlangId){
					foreach ($userLanguagesIds as $ulangId) {
						if ($qlangId == $ulangId) {
							$relevantQs[] = $question;
						}
					}
				}
			}
		};

		$relevantMax = $user->questions()->count();
		
		$relevantQs = array_slice($relevantQs, 0, $relevantMax);

		$score = $this->getUserScore($id);
		return View::make("users.show")->with(['user' => $user, 'score' => $score, 'languages' => $languages, 'userLanguagesIds' => $userLanguagesIds, 'relevantQs' => $relevantQs]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//update to remove when saved
		$user = User::find($id);
		$getUserLang = Input::get('language');//array ids from input
		$languages = Language::all()->toArray();		
		
		$allUserLang = DB::table('language_user')
		->select(DB::raw('language_id'))
		->where('user_id', '=', $user->id)
		->get();
		if (!empty($allUserLang)) {
			
			foreach ($allUserLang as $language) {
				$allUserLanguages[] = $language;
			}

			foreach ($languages as $language) {
				if (!array_search($language, $allUserLanguages)) {
					$user->languages()->detach($language);
				}
			}			
		}

		if ($getUserLang) {

			foreach ($getUserLang as $userLanguage) {
				//check if the lang selected exists in db
				$dontDupe = DB::table('language_user')
						->select(DB::raw('language_id'))
						->where('user_id', '=', $user->id)->where('language_id', '=', $userLanguage)
						->get();
						//if query  exists do not attach
				if (empty($dontDupe)) {
					$user->languages()->attach($userLanguage);
				} 
			}
		}

		

		return Redirect::back()->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if(Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			return Redirect::action('UsersController@show', Auth::id());
		} else if (Auth::attempt(array('email' => $email, 'password' => $password))) 
		{
			Session::flash('errorMessage', 'There was an error with your login!');
			return Redirect::back()->withInput();
		} else {
			return Redirect::to('/');
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function subscribe()
	{
		return View::make('users.subscription');
	}

	public function createSubscription()
	{
		$token = Input::get('stripeToken');
	    Auth::user()->subscription('monthly')->create($token);
	    Session::flash('successMessage', 'Subscription Successful! You are now a premium user');
	    return Redirect::back();
	}	

	public function cancelSubscription($id)
	{
		$user = User::find($id);
        if(Auth::user() && Auth::id() == $id && Auth::user()->subscribed())
        {
            $user->subscription()->cancel();
            Session::flash('successMessage', 'You are now unsubscribed');
            return View::make('users.cancel');
        }
	}

	public function resumeSubscription($id)
	{
		$user = User::find($id);
		if(Auth::user() && Auth::id() == $id && Auth::user()->cancelled()) 
		{
			$user->subscription('monthly')->resume($user->token);
			Session::flash('successMessage', 'You have successfully resumed your premium services!');
			return Redirect::back();
		}
	}
}
