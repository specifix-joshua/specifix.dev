@extends('layouts.master')

@section('title')
    Ask a Question
@stop

@section('content')
<div class="container">
{{Form::open(array('action' => 'QuestionsController@store')) }}
<!--Question Title-->
    <div class="form-group">
        {{ Form::label('title', 'Title', array('class' => 'control-label')) }}
        <p class="form-sub">Ex. "[ErrorException] Undefined index: USER_PASSWORD When Migrating."</p>
        {{ Form::text('title', null, array('placeholder' => 'Your Question', 'class' => 'form-control', 'value' => "{{{ Input::old('title') }}}")) }}
        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
    </div>
<!--Question Content-->
    <div class="form-group">
        {{ Form::label('content', 'Content', array('class' => 'control-label')) }}
        <p class="form-sub">Be as descriptive as possible when describing your issue. To include syntax-highlighted code, click the "{;}" button, select your language, and paste your code into the box.</p>
        {{ Form::textarea('content', null, array('placeholder' => 'Question Details', 'class' => 'form-control')) }}
        {{ $errors->first('content', '<span class="help-block">:message</span>') }}
    </div>
<!--Question Categories-->
    <div class="form-group">
        {{ Form::label('languages', 'Languages', array('class' => 'control-label')) }}
        <p>
        @foreach ($languages as $language)
            <label class="lang-check">{{ Form::checkbox('language[]', $language->id) }} {{ $language->language }}</label>
        @endforeach
        </p>
    </div>
<!--SUBMIT-->
    <div class="form-group">
        <button class="btn btn-primary cta" name="submit" type="submit">Submit</button>
    </div>
{{ Form::close() }}
</div>
@stop
