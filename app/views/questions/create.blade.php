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
        {{ Form::text('title', null, array('placeholder' => 'Your Question', 'class' => 'form-control', 'value' => "{{{ Input::old('title') }}}")) }}
        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
    </div>
<!--Question Content-->
    <div class="form-group">
        {{ Form::label('content', 'Content', array('class' => 'control-label')) }}
        {{ Form::textarea('content', null, array('placeholder' => 'Question Details', 'class' => 'form-control')) }}
        {{ $errors->first('content', '<span class="help-block">:message</span>') }}
    </div>
<!--Question Categories-->
    <div class="form-group row">
        {{ Form::label('languages', 'Languages', array('class' => 'control-label')) }}
        {{ Form::checkbox('language', 'HTML') }}HTML
        {{ Form::checkbox('language', 'CSS') }}CSS
        {{ Form::checkbox('language', 'JavaScript') }}JavaScript
        {{ Form::checkbox('language', 'jQuery') }}jQuery
        {{ Form::checkbox('language', 'PHP') }}PHP
        {{ Form::checkbox('language', 'MySQL') }}MySQL
        {{ Form::checkbox('language', 'Laravel') }}Laravel
    </div>
<!--SUBMIT-->
    <div class="form-group">
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    </div>
{{ Form::close() }}
</div>
@stop
