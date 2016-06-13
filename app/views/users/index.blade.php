@extends('layouts.master')

@section('title')
    Top Users
@stop

@section('content')
<div class="container">
<!--HEADER-->
    <div class="page-header">
        <h1>Top Users</h1>
    </div>
<!--User Boxes-->
@foreach($users as $user)
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="caption">
            <h3>{{{ $user->username }}}</h3>
            <p>{{{ $user->questions->count() }}}</p>
            <p>{{{ $user->answers->count() }}}</p>
            <p>User Score:</p>
            <h3>{{{ $user->score }}}</h3>
            <p><a href="#" class="btn btn-primary" role="button">View Profile</a></p>
        </div>
    </div>
@endforeach
</div>
