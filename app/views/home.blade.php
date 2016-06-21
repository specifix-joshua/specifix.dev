
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
		<div class="col-lg-2">
			<h3>Top 20 Users</h3>
		</div>
		<div class="col-lg-7">
			<h3>Today's Top Questions</h3>
		</div>
		<div class="col-lg-3">
			<h3>Questions by Language</h3>
			<div id="home-lang-holder">
				@foreach($languageQs as $languageQ)
				<a id="language-link" href="/messages">
					<div id="language-container">
						<div id="ranked-language">
							<p><strong>{{{$languageQ->language}}}</strong>  <button class="pull-right question-module">{{{$languageQ->count}}} Questions</button></p>
						</div>
						<hr id="lang-divide">
					</div>
				</a>
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