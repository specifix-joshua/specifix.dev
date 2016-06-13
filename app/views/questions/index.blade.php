@extends('layouts.master')

@section('title')
    Browse Questions
@stop

@section('content')
    @foreach($questions as $question)
        <div class="container">
            <h2>{{{ $question->title }}}</h2>
                <p>{{{ $question->content }}}</p>
                <p>Asked by: {{{ $question->user->username }}}</p>
                <p>Language(s): {{{ $question->language }}} </p>
                <p>Current rating: {{{ $question->score }}} </p>
        </div>
    @endforeach
@stop