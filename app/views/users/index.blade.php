@extends('layouts.master')

@section('title')
    Top Users
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Top Users</h1>
    </div>
    @foreach($users as $key => $user)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3>{{{ $user->username }}}</h3>
                    <p>Questions Asked: {{{ $user->questions->count() }}}</p>
                    <p>Answers Given: {{{ $user->answers->count() }}}</p>
                    <p>Rating: </p>
                    <h3>{{{ $score[$key] }}}</h3></span>
                    <p><a href="/users/{{{$user->id}}}" class="btn btn-primary" role="button">View Profile</a></p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@stop
