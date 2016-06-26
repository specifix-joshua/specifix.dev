@extends('layouts.master')

@section('title')
    Browse Questions
@stop

@section('content')
<div class="container">
    <div class="col-lg-8">
        <div class="column-holder">
        @foreach($questions as $key => $question)
            <div class="items-container">
                <div class="item">
                    <h2><a href="{{{action('QuestionsController@show', $question->id) }}}">{{{ $question->title }}}
                        @if($question->Premium == 'Yes')
                        <span class="glyphicon glyphicon-star prem-star" aria-hidden="true"></span>
                        @endif
                    </a></h2>
                        <p>Asked by: {{{ $question->user->username }}}</p>
                        <p>Current rating: {{ $score[$key] }} </p>
                        <p>Language(s): </p>
                        <div class="inline">
                        @foreach ($question->languages()->get() as $language)
                            <a class="language-button" method="GET" href="{{{action('QuestionsController@index', 'language='.$language->language)}}}"> {{{$language->language}}}</a><span>&nbsp&nbsp</span>
                        @endforeach
                        </div>
                </div>
            </div>
        @endforeach
        </div>
    {{ $questions->links() }}
    </div>
</div>
@stop
