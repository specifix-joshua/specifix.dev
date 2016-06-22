@extends('layouts.master')

@section('title-tag')
    Your Profile
@stop

@section('top-links')
	
@stop

@section('content')
<!-- USER INFO -->
<div class="container">
	<div class="row">
    	<div class="col-xs-12">
            <div id="user-title">
            @if ($user->id == Auth::id())
                <h1>Welcome, {{{ $user['first_name'] }}}!</h1>
            @else
                <h1><span class="glyphicon glyphicon-user"></span>{{{$user['username']}}}</h1>
            @endif
                <p class="control-label">Questions: {{{$user->questions->count()}}}</p>
                <p class="control-label">Answers: {{{$user->answers->count()}}}</p>
                <p class="control-label">Score: {{$score}}</p>
                @if (Auth::user() && Auth::id() == $user->id && Auth::user()->subscribed())
                    <p>You are currently a premium user!</p>
                    @if ($user->cancelled())
                        <p><small>You have already canceled your subscription</small></p>
                    @else
                        <p><a href="{{{ action('UsersController@cancelSubscription', $user->id) }}}">Cancel your subscription</a></p>
                    @endif
                @endif
           
                @if ($user->id == Auth::id())
                    {{ Form::open(array('action' => array('UsersController@update', $user->id), 'method' => 'PATCH')) }}
    		        {{ Form::label('languages', 'My Languages:', array('class' => 'control-label')) }}
			        @foreach ($languages as $language)
                    <!-- ajax req if feeling lucky -->
			            <label class="lang-check">{{ Form::checkbox('language[]', $language->id, $userLanguagesIds->search($language->id) !== false) }} {{ $language->language }} </label>
                        
			        @endforeach
			        {{ Form::submit('Save', array('class' => 'btn btn-default')) }}
			        {{ Form::close() }}
               @else 
                <p>Languages: @foreach($user->languages()->get() as $language)
                    {{ $language->language }}
                    @endforeach
                </p>
                @endif
           	</div>
        </div>
	</div>
</div>
<!-- END USER INFO -->

<!-- USER COLUMNS -->

<div class="container">
	<hr class="ad-divider">
    <div class="row">
	    @if (!$user->questions->isEmpty())
	    <div class="container col-lg-6">
	    	<h2>Your Latest Questions</h2>
	        <div class="column-holder">
	        	@foreach($user->questions as $questionNum => $question)
				<div class="items-container">
			    	<div class="item">
					    <div class="pull-right">
				    	
	                    <button type="button" class="btn btn-danger btn-small" id="delete-modal-button" data-toggle="modal" data-target=".delete-modal-<?=$questionNum?>">Delete</button>
	                	</div>
					    <a class="question-link" href="{{{action('QuestionsController@show', $question->id) }}}"><h3 class="item-head">{{$question->title}}</h3></a>
					    <p> 
						    <div class="inline">
						    	@foreach ($question->languages()->get() as $language)
					                <a class="language-button" method="GET" href="{{{action('QuestionsController@index', 'language='.$language->language)}}}"> {{{$language->language}}}</a><span>&nbsp&nbsp</span>
						        @endforeach
						    </div>
					    </p>
					    <p class="question-date">Added by: {{{$question->user->username}}}</p>
					    <p>{{$question->created_at->setTimezone('America/New_York')->format('F jS Y')}}</p>
				    </div>
			    </div>
				
	            <!-- DELETE MODAL -->
				<div class="modal fade delete-modal-{{$questionNum}}" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					    <div class="modal-header">
					      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					      <h4 class="modal-title text-center" id="mySmallModalLabel">That's risky business! You sure you want to delete this question?</h4>
					      <div id="question-actions" class="row col-xs-10 col-xs-offset-1">
					      {{ Form::open([
		                    'action' => ['QuestionsController@destroy', $question->id],
		                    'id'     => 'delete-post-form',
		                    'method' => 'DELETE',
			                ]) }}
							<button class="btn btn-danger" id="delete-post-btn">Delete?</button>
						  {{ Form::close() }}
						  </div>
					    </div>
					  </div>
					</div>
				</div>
				<!-- END DELETE MODAL -->
	        	@endforeach
	    	</div>
		</div>
	    @else
	    	<h2 class="text-center">Slackin'! You haven't written any questions yet.</h2>
	    	<p class="text-center">(Let's fix that.)</p>
		@endif
		<div class="container col-lg-6">
	    	<h2>Questions For You</h2>
	        <div class="column-holder">
	        	@foreach($relevantQs as $relevantQ)
				<div class="items-container">
			    	<div class="item">
					    <a class="question-link" href="{{{action('QuestionsController@show', $relevantQ->id) }}}"><h3 class="item-head">{{$relevantQ->title}}</h3></a>
					    <p> 
						    <div class="inline">
						    	@foreach ($relevantQ->languages()->get() as $language)
					                <a class="language-button" method="GET" href="{{{action('QuestionsController@index', 'language='.$language->language)}}}"> {{{$language->language}}}</a><span>&nbsp&nbsp</span>
						        @endforeach
						    </div>
					    </p>
					    <p class="question-date">Added by: {{{$relevantQ->user->username}}}</p>
					    <p>{{$relevantQ->created_at->setTimezone('America/New_York')->format('F jS Y')}}</p>
				    </div>
			    </div>
	        	@endforeach
	    	</div>
		</div>
	</div>
</div>

<!-- END USER'S ADS -->
@stop