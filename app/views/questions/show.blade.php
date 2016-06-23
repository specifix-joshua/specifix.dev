@extends('layouts.master')

@section('title-tag')
    {{{$question->title}}}
@stop

@section('top-links')
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	</style>
@stop

@section('content')

<div class="container">
	<!-- OPENING INFO -->
	<div class="col-xs-12"> 
		<h1>{{{$question->title}}}</h1>
    	<p>Posted by {{{$question->user->username}}} on {{$question->created_at->setTimezone('America/New_York')->format('F jS Y @ h:i A')}}</p>
    	<p>Tagged:</p>
		 <div class="inline">
            @foreach ($question->languages()->get() as $language)
                <a class="language-button" method="GET" href="{{{action('QuestionsController@index', 'language='.$language->language)}}}"> {{{$language->language}}}</a><span>&nbsp&nbsp</span>
	        @endforeach
        </div>
	</div>
	<!-- END OPENING INFO -->
	<div class="row">
		<div id="vote-apparatus" class="col-xs-2">
			<div class="vote chev">
				@if($vote_value == 1) 
				<!-- VOTING APPARATUS - UP DISABLED -->
					<div class="increment up disabled" data-type='question' data-object-id='{{{$question->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$voted}}}' data-vote-id='{{{$vote_id}}}'></div>
				    <div class="increment down enabled double" data-type='question'  data-object-id='{{{$question->id}}}' data-user-id='{{{$question->user->id}}}'
				    data-voted='{{{$voted}}}' data-vote-id='{{{$vote_id}}}'></div>
				    <div class="count">{{{$votes}}}</div>
				@elseif($vote_value == -1)
				<!-- VOTING APPARATUS - DOWN DISABLED -->
					<div class="increment up enabled double" data-type='question'  data-object-id='{{{$question->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$voted}}}' data-vote-id='{{{$vote_id}}}'></div>
				    <div class="increment down disabled" data-type='question'  data-object-id='{{{$question->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$voted}}}' data-vote-id='{{{$vote_id}}}'></div>
				    <div class="count">{{{$votes}}}</div>
				@else
				<!-- VOTING APPARATUS - ENABLED -->
					<div class="increment up enabled" data-type='question'  data-object-id='{{{$question->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$voted}}}' data-vote-id='{{{$vote_id}}}'></div>
				    <div class="increment down enabled" data-type='question'  data-object-id='{{{$question->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$voted}}}' data-vote-id='{{{$vote_id}}}'></div>
				    <div class="count">{{{$votes}}}</div>
				@endif			    
			</div>
		</div>
		<div class="panel col-xs-10"> 
			<div class="panel-body"> 
				<p>{{$question->content}}</p>
			</div> 
		</div>
	</div>
	<!-- END QUESTION & SCORE -->

	<!-- POSTED ANSWERS -->
	@foreach ($answers as $answer)
	<div class="row">
		<div id="vote-apparatus" class="col-xs-2 col-xs-offset-2">
			<div class="vote chev">
				@if($answer->vote_value == 1) 
				<!-- VOTING APPARATUS - UP DISABLED -->
					<div class="increment up disabled" data-type='answer' data-object-id='{{{$answer->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$answer->voted}}}' data-vote-id='{{{$answer->vote_id}}}'></div>
				    <div class="increment down enabled double" data-type='answer' data-object-id='{{{$answer->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$answer->voted}}}' data-vote-id='{{{$answer->vote_id}}}'></div>
				    <div class="count">{{{$answer->vote_count}}}</div>
				@elseif($answer->vote_value == -1)
				<!-- VOTING APPARATUS - DOWN DISABLED -->
					<div class="increment up enabled double" data-type='answer'  data-object-id='{{{$answer->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$answer->voted}}}' data-vote-id='{{{$answer->vote_id}}}'></div>
				    <div class="increment down disabled" data-type='answer'  data-object-id='{{{$answer->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$answer->voted}}}' data-vote-id='{{{$answer->vote_id}}}'></div>
				    <div class="count">{{{$answer->vote_count}}}</div>
				@else
				<!-- VOTING APPARATUS - ENABLED -->
					<div class="increment up enabled" data-type='answer' data-object-id='{{{$answer->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$answer->voted}}}' data-vote-id='{{{$answer->vote_id}}}'></div>
				    <div class="increment down enabled" data-type='answer' data-object-id='{{{$answer->id}}}' data-user-id='{{{$question->user->id}}}' data-voted='{{{$answer->voted}}}' data-vote-id='{{{$answer->vote_id}}}'></div>
				    <div class="count">{{{$answer->vote_count}}}</div>
				@endif	
			</div>
		</div>
		<div class="panel col-xs-8"> 
			<div class="panel-body" id="answer"> 
				<p>{{$answer->content}}</p>
				<p><small>Answered by: {{{ $answer->user->username }}}</small></p>

				@if (Auth::check())
					@if(Auth::user()->id == $answer->user->id)
						{{ Form::open([
		                    'action' => ['AnswersController@destroy', $answer->id],
		                    'id'     => 'delete-post-form',
		                    'method' => 'DELETE',
		                ]) }}
						<button class="btn btn-danger" id="delete-post-btn">Delete?</button>
						{{ Form::close() }}
					@endif
				@endif
			</div> 
		</div>
	</div>
	@endforeach
	<!-- END POSTED ANSWERS -->
	@if (Auth::check())
	<!-- SUBMIT ANSWER -->
	<div class='col-xs-10 col-xs-offset-2'>
		<div class="row">
			<h2>Submit A New Answer:</h2>
		</div>
		<div class="row answer-form">
			{{Form::open(array('action' => array('AnswersController@store', $question->id))) }}
			<!--Question Content-->
			    <div class="form-group">
			        {{ Form::label('content', 'Content', array('class' => 'control-label')) }}
			        {{ Form::hidden('question_id', $question->id) }}
			        {{ Form::hidden('question_user', $question->user_id) }}
			        {{ Form::hidden('question', $question) }}
			        {{ Form::textarea('content', null, array('placeholder' => 'Question Details', 'class' => 'form-control')) }}
			        {{ $errors->first('content', '<span class="help-block">:message</span>') }}
			    </div>
			<!--SUBMIT-->
			    <div class="form-group">
			        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
			    </div>
			{{ Form::close() }}
		</div>
	</div>
	@else
	<div class='col-xs-10 col-xs-offset-2'>
		<div class="row">
			<h2>Log in to answer this question!</h2>
			<button type="button" class="btn btn-default nav-buttons" id="login-modal-button" data-toggle="modal" data-target=".login-modal">Login</button>
		</div>
		
	</div>
	@endif
	<!-- END SUBMIT ANSWER -->
</div>
@stop