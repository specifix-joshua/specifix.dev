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
    <div class="form-group">
        {{ Form::label('categories', 'Categories', array('class' => 'control-label')) }}
        {{ Form::checkbox('language', 'HTML') }}
        {{ Form::checkbox('language', 'CSS') }}
        {{ Form::checkbox('language', 'JavaScript') }}
        {{ Form::checkbox('language', 'jQuery') }}
        {{ Form::checkbox('language', 'PHP') }}
        {{ Form::checkbox('language', 'MySQL') }}
        {{ Form::checkbox('language', 'Laravel') }}
    </div>
<!--SUBMIT-->
    <div class="form-group">
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    </div>
{{ Form::close() }}
</div>
@stop
