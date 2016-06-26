@extends('layouts.master')

@section('title')
    Top Users
@stop

@section('content')
<div class="container userindex">
    <div class="page-header">
        <h1>All Users</h1>
    </div>
    @foreach($users as $key => $user)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="thumbnail allUsers">
                <div class="caption userindexBox">
                    <h3 class="username-index">{{{ $user->username }}}
                        @if($user->subscribed())
                        <span class="glyphicon glyphicon-star prem-star" aria-hidden="true"></span>
                        @endif
                    </h3>
                    <p><span class="bold">Questions Asked:</span> {{{ $user->questions->count() }}}</p>
                    <p><span class="bold">Answers Given:</span> {{{ $user->answers->count() }}}</p>
                    <p><span class="bold">Rating:</span> </p>
                    <h3 class="userScore-index">{{{ $score[$key] }}}</h3></span>
                    <p><a href="/users/{{{$user->id}}}" class="btn btn-primary userindexButton" role="button">View Profile</a></p>
                </div>
            </div>
        </div>
    @endforeach
    <div class="pagination"><div class="pag">{{ $users->links() }}</div></div>
</div>
@stop
