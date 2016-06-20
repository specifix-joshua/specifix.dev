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
                'doLogin'
            )
        ));
    }

	public function getScore($id)
	{
		$questionScore = DB::table('votes')
			->select(DB::raw('SUM(count) as vote_count'))
			->where('question_id', '=', $id)
			->get();
		$answerScore = DB::table('votes')
			->select(DB::raw('SUM(count) as vote_count'))
			->where('answer_id', '=', $id)
			->get();
		

		return $score = $questionScore[0]->vote_count + $answerScore[0]->vote_count;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(20);
		foreach ($users as $user) {
			$score[] =  $this->getScore($user->id);
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
			Session::flash('successMessage', 'User has been saved');
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
		$score = $this->getScore($id);
		return View::make("users.show")->with(['user' => $user, 'score' => $score, 'languages' => $languages, 'userLanguagesIds' => $userLanguagesIds]);
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
			return Redirect::to('/users');
		} else {
			Session::flash('errorMessage', 'There was an error with your login!');
			return Redirect::back()->withInput();
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
}
