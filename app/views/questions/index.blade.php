@extends('layouts.master')

@section('title')
    Browse Questions
@stop

@section('content')
    @foreach($questions as $key => $question)
        <div class="container">
            <h2><a href="{{{action('QuestionsController@show', $question->id) }}}">{{{ $question->title }}}</a></h2>
                <p>Asked by: {{{ $question->user->username }}}</p>
                <p>Current rating: {{ $score[$key] }} </p>
                <p>Language(s): </p>
                <div class="inline">
                @foreach ($question->languages()->get() as $language)
                    <a class="language-button" method="GET" href="{{{action('QuestionsController@index', 'language='.$language->language)}}}"> {{{$language->language}}}</a><span>&nbsp&nbsp</span>
                @endforeach
                </div>
        </div>
    @endforeach
    {{ $questions->links() }}
@stop
