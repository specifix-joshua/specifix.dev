
@extends('layouts.master')

@section('title')
    Your Messages
@stop

@section('top-links')
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
@stop

@section('content')
<div class="container">
  @if ($user->id == Auth::id())

   	<div class="mail-box">
    <aside class="sm-side">
        <div class="user-head">
            
        </div>
        <ul class="inbox-nav inbox-divider">
            <li class="active">
                <a href="{{{action('NotificationsController@show', $user->id)}}}"><i class="fa fa-inbox"></i> All Mail <span class="label label-danger pull-right">{{{$user->notifications()->count()}}}</span></a>

            </li>
            <li>
              <a href="{{{action('NotificationsController@show', $user->id)}}}?type=unread" method="GET" value="answers"><i class="fa fa-envelope-o"></i> Unread<span class="label label-danger pull-right">{{{$unreadCount}}}</span></a>
            </li>
            <li>
              <a href="{{{action('NotificationsController@show', $user->id)}}}?type=answers" method="GET" value="answers"><i class="fa fa-envelope-o"></i> Answers</a>
            </li>
            <!-- lis for each of the user's subscribed languages -->

            <li>
              <a href="{{{action('NotificationsController@show', $user->id)}}}?type=questions" method="GET"><i class="fa fa-envelope-o"></i> Questions</a>
            </li>
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
  			              <td class="view-message  dont-show" data-notif-id='{{{$notification->id}}}'><a href="{{{action('QuestionsController@show', $notification->object_id) }}}">{{{$notification->type}}}</a></td>
  			              <td class="view-message " data-notif-id='{{{$notification->id}}}'><a href="{{{action('QuestionsController@show', $notification->object_id) }}}">{{{$notification->subject}}}</a></td>
  			              <td class="view-message  inbox-small-cells" data-notif-id='{{{$notification->id}}}'><a href="{{{action('QuestionsController@show', $notification->object_id) }}}"></td></a>
  			              <td class="view-message  text-right" data-notif-id='{{{$notification->id}}}'>{{{$notification->sent_at->format('F jS')}}}</td>
  				          </tr>
  							@endforeach
  						@endif
  	      	</tbody>
  	      </table>
        </div>
    </aside>
  	</div>
  </div>
  @else
    <h1>You cant just go around reading other people's mail!</h1>
    <a href="{{{ action('NotificationsController@show', Auth::id()) }}}"><button class="purp-button">Click here to read your own mail.</button></a>
  @endif
</div>
@stop
</div>