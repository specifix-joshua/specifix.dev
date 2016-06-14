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
		<p>Tagged: {{{$question->language}}}</p>
	</div>
	<!-- END OPENING INFO -->

	<!-- QUESTION & SCORE -->
	<div class="row">
		<div id="vote-apparatus" class="col-xs-2">
			<div class="vote roundrect">
				<div class="increment up"></div>
			    <div class="increment down"></div>
			    <div class="count">{{{$question->score}}}</div>
			</div>
		</div>
		<div class="panel col-xs-10"> 
			<div class="panel-body"> 
				<p>{{{$question->content}}}</p>
			</div> 
		</div>
	</div>
	<!-- END QUESTION & SCORE -->

	<!-- POSTED ANSWERS -->
	@foreach ($answers as $answer)
	<div class="row">
		<div id="vote-apparatus" class="col-xs-2 col-xs-offset-2">
			<div class="vote roundrect">
				<div class="increment up"></div>
			    <div class="increment down"></div>
			    <div class="count">{{{$answer->score}}}</div>
			</div>
		</div>
		<div class="panel col-xs-8"> 
			<div class="panel-body"> 
				<p>{{{$answer->content}}}</p>
				<p><small>Answered by: {{{ $answer->user->username }}}</small></p>
				@if(Auth::user()->id == $answer->user->id)
					{{ Form::open([
	                    'action' => ['AnswersController@destroy', $answer->id],
	                    'id'     => 'delete-post-form',
	                    'method' => 'DELETE',
	                ]) }}
					<button class="btn btn-danger" id="delete-post-btn">Delete?</button>
					{{ Form::close() }}
				@endif
			</div> 
		</div>
	</div>
	@endforeach
	<!-- END POSTED ANSWERS -->

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
	<!-- END SUBMIT ANSWER -->
</div>
@stop