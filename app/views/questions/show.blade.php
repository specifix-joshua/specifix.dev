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
	<!-- Opening info -->
	<h1>{{{$question->title}}}</h1>
	<p>Posted by {{{$question->user->username}}} on {{$question->created_at->setTimezone('America/New_York')->format('F jS Y @ h:i A')}}</p>
	<p>Tagged: {{{$question->languages}}}</p>
	<!-- End opening info -->

	<!-- Question Input & Score Apparatus -->



</div>
@stop