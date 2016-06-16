<?php
	if (Auth::check()){
	    $user = Auth::user();
	    $notifications = $user->notifications()->get();
	    $unreadCount = $user->notifications()->unread()->count();
	} else {
		// redirect to homepage with error message
	}
?>

@extends('layouts.master')

@section('title')
    Your Messages
@stop

@section('content')
<div class="container">
	<h1>You have {{{$unreadCount}}} unread messages in your inbox!</h1>
	@if ($user)
		@foreach($notifications as $notification)
			<div class="notification {{ $notification->type }}">    
			    <p class="subject">{{ $notification->subject }}</p>
			    <p class="body">{{ $notification->body }}</p>
			</div>
		@endforeach
	@else
		<p> You need to log in, stupid.</p>
	@endif
@stop
</div>