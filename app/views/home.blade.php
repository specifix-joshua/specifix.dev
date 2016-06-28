
@extends('layouts.master')

@section('title-tag')
    Your Questions, Answered.
@stop

@section('top-links')
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
@stop

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<h3>Today's Top Questions</h3>
			<div class="column-holder">
				@foreach($questions as $question)
					<div class="items-container">
				    	<div class="item">
						    <a class="question-link" href="{{{action('QuestionsController@show', $question->id) }}}"><h3 class="item-head">{{$question->title}}
						    	@if($question->Premium == 'yes')
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
						    <p>{{$question->created_at->setTimezone('America/New_York')->format('F jS Y')}}</p>
					    </div>
				    </div>
				@endforeach
			</div>
		</div>
		<div class="col-lg-4">
			<h3>Questions by Tags</h3>
			<div class="column-holder">
				@foreach($languageQs as $languageQ)
					<div class="items-container">
						<div class="item">
							<a class="item-head by-lang-links" href="{{{action('QuestionsController@index', 'language='.$languageQ->language)}}}"><span class='black'>{{{$languageQ->language}}}</span> ({{{$languageQ->count}}} Questions)</a>
						</div>
					</div>
				@endforeach
			</div>
			<hr>
			<h3>Top 20 Users</h3>
			<div class="column-holder">
				@foreach($users as $user)
					<div class="items-container">
				    	<div class="item">
				    		<p><a href="{{action('UsersController@show', $user->id)}}"></span> {{{$user->username}}} - <button class="score-icon">{{{$user->score}}}</button></a></p>
					    </div>
				    </div>
				@endforeach
			</div>
		</div>
	</div>
</div>


<!-- Marketing messaging and featurettes
================================================== -->

<!-- <div class="container marketing">

  <!-- Three columns of text below the carousel -->
 <!--  <div class="row text-center">
    <div class="col-lg-4">
      <img class="img-circle center-block" src="/img/question-mark.png" alt="Generic placeholder image" width="140" height="140">
      <h2>Got Questions?</h2>
      <p>We've got answers! This is the place for all your LAMP+J questions. No short answers or links to other threads here. Each question gets its own specific solution, ensuring you leave with a proper solution.</p>
      <p><a class="btn btn-secondary" href="{{--{{action('ReportsController@create')}}--}}" role="button">Ask Now! &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <!-- <div class="col-lg-4"> -->
      <!-- <img class="img-circle center-block" src="./img/specifix-bounty.png" alt="Generic placeholder image" width="140" height="140">
      <h2>Place A Bounty</h2>
      <p>Are you in need of expert help right away? For a small fee, Specifix bounties get you quality answers FAST! Post your question to the bounty board containing your desiredexperts, and poof! No more bug.</p>
      <p><a class="btn btn-secondary" href="{{--{{action('InstancesController@create')}}--}}" role="button">Place a Bounty&raquo;</a></p>
    </div><!-- /.col-lg-4 --> 
    <!-- <div class="col-lg-4">
      <img class="img-circle center-block" src="./img/easy-money.png" alt="Generic placeholder image" width="140" height="140">
      <h2>Earn Cash</h2>
      <p>Do you have the jump on JavaScript? Are you a PHP professional? A MySQL master? Monitor the Specifix bounty boards for questions you can answer, and we'll reward you with cold hard cash. How easy is that?</p>
      <p><a class="btn btn-secondary" href="{{--{{action('DiysController@create')}}--}}" role="button">Get Paid, Son &raquo;</a></p> -->
    <!-- </div>/. -->
  <!-- </div> --><!-- /.row -->
<!-- </div> --> <!-- /.container -->
	{{-- <div id="post-holder" class="container col-md-10 col-xs-12 col-md-offset-1">
	   @foreach($posts as $post)
	    	<div class="row pre-post">
		    	<a href="{{{ action('PostsController@show', [$post->id]) }}}" class="read-on"><img class="col-xs-12 col-md-6 pre-image" src="/{{$post->image}}"></a>
		    	<div class="col-xs-12 col-md-6 info">
				    <p><strong>Categories:</strong> {{$post->categories}} </p>
				    <h3 class="pre-head">{{$post->title}}</h3>
				    <p class="post-date">{{$post->created_at->setTimezone('America/New_York')->format('F jS Y @ h:i A')}} EST</p>
				    <p> {{$post->summary}} </p>
				    <a href="{{{ action('PostsController@show', [$post->id]) }}}" class="read-on">Keep Reading!</a>
			    </div>
		    </div>
		    <hr>
		@endforeach
		{{ $posts->links() }}
	</div>--}}
</div>
@stop