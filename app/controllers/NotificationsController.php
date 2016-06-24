<?php

class NotificationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('messages');
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
		$notification = Notification::find(Input::get('notif_id'));
		$notification->id = Input::get('notif_id');
		$notification->is_read = Input::get('is_read');
		$notification->save();
		Log::info("Notif Created: id= $notification->id");
		// return Response::json(array('status' => 'OK', 'data' => ['id' => $vote->id, ]));
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
		
		if (Input::get('type')) {
			$type = Input::get('type');
			
			if($type == 'questions') {
				$notifications = $user->notifications()->where('type', 'Question')->get();
			}elseif($type == 'answers') {
				$notifications = $user->notifications()->where('type', 'Answer')->get();
			}elseif($type == 'unread') {
				$notifications = $user->notifications()->unread()->get();
			}
		} else {
			$notifications = $user->notifications()->get();
		}

		$unreadCount = $user->notifications()->unread()->count();
		
		return View::make("messages")->with(['user' => $user, 'notifications' => $notifications, 'unreadCount' => $unreadCount]);
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
