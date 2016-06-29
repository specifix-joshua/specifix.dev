@extends('layouts.master')

@section('title-tag')
    Your Profile
@stop

@section('top-links')
	
@stop

@section('content')
<!-- USER INFO -->
<div class="container">
	<div id="pro-row" class="row">
    	<div class="col-xs-12">
            <div id="user-title">
            @if ($user->id == Auth::id())
                <h1>Welcome, {{{ $user['first_name'] }}}!
                @if($score >= 50)
                    <span class="expert-icon"> &nbsp Expert &nbsp</span>
                @endif
                </h1>
            @else
                <h1><span class="glyphicon glyphicon-user"></span> - {{{$user['username']}}}
                @if($score >= 50)
                    <span class="expert-icon"> &nbsp Expert &nbsp</span>
                @endif
                </h1>
            @endif
                <p class="control-label">Questions: {{{$user->questions->count()}}}</p>
                <p class="control-label">Answers: {{{$user->answers->count()}}}</p>
                <p class="control-label">Score: {{$score}}</p>
                @if (Auth::id() == $user->id && Auth::user()->subscribed())
                    @if ($user->cancelled())
                        <p>You've cancelled your premium subscription :[</p>
                    @else
                    <p>You are currently a premium user! <a class="hard-to-see" id="cancel-modal-button" data-toggle="modal" data-target=".cancel-modal">Click here to cancel your subscription</a></p>
                	<!-- CANCEL MODAL -->
					<div class="modal fade cancel-modal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-sm">
						  <div class="modal-content">
						    <div class="modal-header">
						      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						      <h4 class="modal-title text-center" id="mySmallModalLabel">Are you sure you want to cancel your subscription?</h4>
						      <div class="col-xs-10 col-xs-offset-1">
						      	<a href="{{{ action('UsersController@cancelSubscription', $user->id) }}}"><button id="cancel-link" type="button" class="btn-danger"><span aria-hidden="true">I want my life to suck. Cancel my subscription.</span></button></a>
						      	<button type="button" class="purp-button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">I'm an intelligent person, therefore, I won't cancel.</span></button>
							  </div>
						    </div>
						  </div>
						</div>
					</div>
					<!-- END DELETE MODAL -->
                        
                    @endif
                @endif
           
                @if ($user->id == Auth::id())
                    {{ Form::open(array('action' => array('UsersController@update', $user->id), 'method' => 'PATCH')) }}
    		        {{ Form::label('languages', 'My Tags:', array('class' => 'control-label')) }}
			        @foreach ($languages as $language)
			            
                        <label class="lang-check">{{ Form::checkbox('language[]', $language->id, $userLanguagesIds->search($language->id) !== false) }} {{ $language->language }} </label>
			        @endforeach
			        {{ Form::submit('Save', array('class' => 'btn btn-default')) }}
			        {{ Form::close() }}
               @else 
                <p>Languages: 
                	@foreach($user->languages()->get() as $language)

                	<a class="language-button" method="GET" href="{{{action('QuestionsController@index', 'language='.$language->language)}}}"> {{{$language->language}}}</a><span>&nbsp&nbsp</span>

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
    		@if ($user->id == Auth::id())
		    <div class="container col-lg-6">
		    	<h2>Your Latest Questions</h2>
	    	@else
	    	<div class="container col-lg-8">
		    	<h2>{{{$user->username}}}'s Latest Questions</h2>
	    	@endif
		        <div class="column-holder">
		        	@foreach($userQs as $questionNum => $question)
					<div class="items-container">
				    	<div class="item">
						    <a class="question-link" href="{{{action('QuestionsController@show', $question->id) }}}"><h3 class="item-head">{{$question->title}}
						    	@if($question->Premium == 'Yes')
					    		<span class="glyphicon glyphicon-star prem-star" aria-hidden="true"></span>
					    		@endif
				    		</h3></a>
						    <p> 
							    <div class="inline">
							    	@foreach ($question->languages()->get() as $language)
						                <a class="language-button" method="GET" href="{{{action('QuestionsController@index', 'language='.$language->language)}}}"> {{{$language->language}}}</a><span>&nbsp&nbsp</span>
							        @endforeach
							    </div>
						    </p>
						    <p class="question-date">Added by: {{{$question->user->username}}}</p>
					    	@if ($user->id == Auth::id())
							    <div class="pull-right">
			                    <button type="button" class="btn btn-danger btn-small" id="delete-modal-button" data-toggle="modal" data-target=".delete-modal-<?=$questionNum?>">Delete</button>
			                	</div>
			                @endif
						    <p>{{$question->created_at->setTimezone('America/New_York')->format('F jS Y')}}</p>
					    </div>
				    </div>
					@if ($user->id == Auth::id())
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
					@endif
		        	@endforeach
		    	</div>
			</div>
		<div class="container col-lg-6">
			@if ($user->id == Auth::id())
	    	<h2>Questions For You</h2>
	        <div class="column-holder">
	        	@foreach($relevantQs as $relevantQ)
				<div class="items-container">
			    	<div class="item">
					    <a class="question-link" href="{{{action('QuestionsController@show', $relevantQ->id) }}}"><h3 class="item-head">{{$relevantQ->title}}
					    	@if($relevantQ->Premium == 'Yes')
				    		<span class="glyphicon glyphicon-star prem-star" aria-hidden="true"></span>
				    		@endif
				    	</h3></a>
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
	    	@endif
		</div>
	    @else
		    @if ($user->id == Auth::id())
	    	<h2 class="text-center">Slackin'! You haven't written any questions yet.</h2>
	    	<a href="{{{action('QuestionsController@create')}}}"><button class="center-block purp-button">Click here to ask your first question!</button></a>
		    @else
		    <h2 class="text-center">Slackin'! This user hasn't written any questions yet.</h2>
		    @endif
		@endif
	</div>
</div>

<!-- END USER'S ADS -->
@stop
