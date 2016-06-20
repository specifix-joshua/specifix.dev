@extends('layouts.master')

@section('title-tag')
    Your Profile
@stop

@section('top-links')
	
@stop

@section('content')
<!-- USER INFO -->
<div class="container-fluid">
	<div class="row">
    	<div class="col-xs-12">
            <div id="user-title" class="col-xs-6">
            @if ($user->id == Auth::id())
                <h1>Welcome, {{{ $user['first_name'] }}}!</h1>
            @endif
                <h3>Username: {{{$user['username']}}}</h3>
                <p>Questions: {{{$user->questions->count()}}}</p>
                <p>Answers: {{{$user->answers->count()}}}</p>
                <p>Score: {{ $score }}</p>
                @if($user->subscribed())
                    <p>You are a premium user!</p>
                    {{ Form::open([
                        'action' => ['QuestionsController@cancelSubscription'],
                        'id'     => 'cancelSub',
                        'method' => 'DELETE',
                        ]) 
                    }}
                    <p><button type="button" class="btn btn-danger btn-small" id="cancelSub">Cancel Subscription</button></p>
                    {{ Form::close() }}
                @endif
           </div>
           <div class="row col-xs-12">
                @if ($user->id == Auth::id())
                    {{ Form::open(array('action' => array('UsersController@update', $user->id), 'method' => 'PATCH')) }}
    		        {{ Form::label('languages', 'My Languages:', array('class' => 'control-label')) }}
			        @foreach ($languages as $language)
                    <!-- ajax req if feeling lucky -->
			            <label>{{ Form::checkbox('language[]', $language->id, $userLanguagesIds->search($language->id) !== false) }} {{ $language->language }} </label>
                        
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
            <div id="writeQuotes" class="col-xs-6 text-right">
                <p id="quote"> </p>
                <p id="author"> </p>
            </div>
        </div>
	</div>
</div>
<!-- END USER INFO -->

<!-- USER'S QUESTIONS -->
<div class="profile-ads">
	<div class="container">
		<hr class="ad-divider">
        <!-- forelse loop?? -->
        @if (!$user->questions->isEmpty())
            <h2 class="row text-center recent-ads-header">Your Latest questions</h2>
            <div class="container">
                <div id="question-holder-normal" class="container col-md-10 col-xs-12 col-md-offset-1">
	        	@foreach($user->questions as $questionNum => $question)
			    	<div class="row question-preview">
				    	<div class="col-xs-10 col-xs-offset-1 info">
						    <div class="pull-right">
						    	
			                    <button type="button" class="btn btn-danger btn-small" id="delete-modal-button" data-toggle="modal" data-target=".delete-modal-<?=$questionNum?>">Delete</button>
		                    </div>
						    <h2 class="pre-head"><a href="{{{action('QuestionsController@show', $question->id) }}}">{{$question->title}}</a></h2>
						    <p class="question-date">Added: {{$question->created_at->setTimezone('America/New_York')->format('F jS Y @ h:i A')}} EST</p>
						    <p> {{$question->language}} </p>
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
    </div>
</div>
<!-- END USER'S ADS -->
@stop