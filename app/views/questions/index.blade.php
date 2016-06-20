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
                @foreach ($question->languages()->get() as $language)
                    <div class="col-xs-1">
                        {{ Form::open(['action' =>['QuestionsController@index', $language->language], 'method' => 'GET']) }}
                        {{ Form::hidden('language', $language->language) }}
                        {{ Form::submit($language->language) }}
                        {{ Form::close() }}
                    </div>
                @endforeach
        </div>
    @endforeach
    {{ $questions->links() }}
@stop
