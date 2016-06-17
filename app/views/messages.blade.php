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
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 	<div class="mail-box">
  <aside class="sm-side">
      <div class="user-head">
          
      </div>
      <ul class="inbox-nav inbox-divider">
          <li class="active">
              <a href="#"><i class="fa fa-inbox"></i> All Mail <span class="label label-danger pull-right">{{{$notifications->count()}}}</span></a>

          </li>
          <li>
              <a href="#"><i class="fa fa-envelope-o"></i> Unread <span class="label label-danger pull-right">{{{$unreadCount}}}</span></a>
          </li>
          <li>
              <a href="#"><i class="fa fa-envelope-o"></i> Answers</a>
          </li>
          <!-- lis for each of the user's subscribed languages -->
          <!-- <li>
              <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
          </li>
          <li>
              <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
          </li>
          <li>
              <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
          </li> -->
      </ul>

  </aside>
  <aside class="lg-side">
      <div class="inbox-head">
        <h3>Inbox | {{{$unreadCount}}} unread notifications</h3>
      </div>
      <div class="inbox-body">
	      <table class="table table-inbox table-hover">
	        <tbody>
	        	@if ($user)
							@foreach($notifications as $notification)
								@if ($notification->is_read == 0)
									<tr class="unread">
								@else
									<tr class="read">
								@endif
			              <td class="inbox-small-cells">
			                <div class="inbox_circle"></div>
			              </td>
			              <td class="view-message  dont-show"><a href="{{{action('QuestionsController@show', $notification->object_id) }}}">{{{$notification->type}}}</a></td>
			              <td class="view-message "><a href="{{{action('QuestionsController@show', $notification->object_id) }}}">{{{$notification->subject}}}</a></td>
			              <td class="view-message  inbox-small-cells"></td>
			              <td class="view-message  text-right">{{{$notification->sent_at}}}</td>
				          </tr>
							@endforeach
						@else
							<p> You need to log in, stupid.</p>
						@endif
	      	</tbody>
	      </table>
      </div>
  </aside>
	</div>
</div>
@stop
</div>