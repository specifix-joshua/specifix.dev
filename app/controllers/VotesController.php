<?php

class VotesController extends \BaseController {

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
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Input::get('voted') == 1) {
			$vote = Vote::find(Input::get('vote_id'));
		} else {
			$vote = new Vote();
		}

		if (Input::get('type') == 'answer') {
			$vote->answer_id = Input::get('object_id');
		} else {
			$vote->question_id = Input::get('object_id');
		}

		$vote->count = Input::get('count');
		$vote->user_id = Auth::id();
		
		$vote->save();
		Log::info("New Vote Created: id= $vote->id");
		return Response::json(['status' => 'OK', 'data' => ['id' => $vote->id, 'count' => $vote->count]]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
