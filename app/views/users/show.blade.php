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
		<div class=" col-xs-12">
	        <div class="col-sm-12">
	        	<div class="row col-xs-12">
		            <div id="user-title" class="col-xs-6">
		                <h1>Welcome, {{{ $user['first_name'] }}}!</h1>
		                <h3>{{{$user['username']}}}</h3>
		                <p>Questions: {{{$questions->count()}}}</p>
		                <p>Answers: {{{$answers->count()}}}</p>
		                <p>Score: </p>
	            	</div>             
		            <div id="writeQuotes" class="col-xs-6 text-right">
		                <p id="quote"> </p>
		                <p id="author"> </p>
		            </div>
		        </div>
	        </div>
	    </div>
	</div>
</div>
<!-- END USER INFO -->

<!-- USER'S ADS -->
<div class="profile-ads">
	<div class="container">
		

		<hr class="ad-divider">
        @if (!$questions->isEmpty())
        <?php $questionNum = 1 ?>
        <h2 class="row text-center recent-ads-header">Your Latest questions</h2>
        <div class="container">
			<div id="question-holder-normal" class="container col-md-10 col-xs-12 col-md-offset-1">
        	@foreach($questions as $question)
		    	<div class="row question-preview">
			    	<div class="col-xs-10 col-xs-offset-1 info">
					    <div class="pull-right">
					    	
		                    <button type="button" class="btn btn-danger btn-small" id="delete-modal-button" data-toggle="modal" data-target=".delete-modal-<?=$questionNum?>">Delete</button>
	                    </div>
					    <h2 class="pre-head">{{$question->title}}</h2>
					    <p class="question-date">Added: {{$question->created_at->setTimezone('America/New_York')->format('F jS Y @ h:i A')}} EST</p>
					    <p> {{$question->language}} </p>
				    </div>
			    </div>

	            <!-- DELETE MODAL -->
				<div class="modal fade delete-modal-<?=$questionNum?>" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					    <div class="modal-header">
					      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					      <h4 class="modal-title text-center" id="mySmallModalLabel">That's risky business! You sure you want to delete this question?</h4>
					      <div id="question-actions" class="row col-xs-10 col-xs-offset-1">
					      	  <button type="button" class="btn btn-sml pull-left" id='dont-delete' data-dismiss="modal" aria-label="Close">Don't delete!</button>
				              
						  </div>
					    </div>
					  </div>
					</div>
				</div>
				<!-- END DELETE MODAL -->
        	<?php $questionNum++ ?>
        	@endforeach
        	</div>
        </div>
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