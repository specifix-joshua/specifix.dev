@extends('layouts.master')

@section('title')
    Browse Questions
@stop

@section('content')
    @foreach($questions as $question)
    {{var_dump($question)}}
        <div class="container">
            <h2><a href="{{{action('QuestionsController@show', $question->id) }}}">{{{ $question->title }}}</a></h2>
                <p>Asked by: {{{ $question->user->username }}}</p>
                <p>Language(s): {{{ $question->language }}} </p>
                <p>Current rating: {{{ $question->score }}} </p>
        </div>
    @endforeach
    {{ $questions->links() }}
@stop