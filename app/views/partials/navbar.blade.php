<?php 
  if (Auth::check()){
    $user = Auth::user();
    $notifications = $user->notifications()->unread()->count();
  }
?>
<!-- NAVBAR -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/">
      	<img src="/img/specifix-bounty.png" href="/" id="specifix-mark" class="navbar-brand">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
          <li><a href="/questions">All Questions</a></li>
          <li><a href="/premium">Premium Questions</a></li>
          <li><a href="/users"><span class="glyphicon glyphicon-user"></span> All Users</a></li>
          <!-- These buttons only show if the user is logged IN -->
          @if (Auth::check())
          <li><a href="/questions/create"><span class="glyphicon glyphicon-pencil"></span> Ask a Question</a></li>
          <li><a href="/subscription">Premium Membership</a></li>
            @if ($notifications > 0)
              <li>
              <a href="/messages"><button id="nav-inbox">{{{$notifications}}}</button></a></li>
            @else
              <li><a href="/messages"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></a></li>
            @endif
          {{-- <li>{{ Form::open(['action' =>'QuestionsController@getPremiumQuestions', 'method' => 'GET']) }} --}}
              {{-- {{ Form::submit('Premium Questions', ['class' => 'btn btn-default nav-buttons']) }} --}}
              {{-- {{ Form::close() }}</li> --}}
	      @else
	      	<li><a data-toggle="modal" data-target=".permission-modal">Ask a Question</a>
	      @endif
	    </ul>

     <div class="nav-menu btn-group pull-right" role="group">

        <!-- Logout & Profile Buttons -->
        <!-- These buttons only show if the user is logged IN -->
        @if (Auth::check())
        <a href="/logout" type="button" class="btn btn-default nav-buttons" id="logout-button">Logout</a>
        <a href="/users/{{{ Auth::user()->id }}}" type="button" class="btn btn-default nav-buttons" id="profile-button">Profile{{--{{{$user->firstname . ' ' . $user->lastname}}}--}}</a>
        @else

        <!-- Login & Signup Buttons -->
        <!-- These only show if the user is logged OUT -->

        <button type="button" class="btn btn-default nav-buttons" id="login-modal-button" data-toggle="modal" data-target=".login-modal">Login</button>
        <button type="button" class="btn btn-default nav-buttons purp-button" id="signup-modal-button" data-toggle="modal" data-target=".signup-modal">Sign Up</button>
        @endif
      </div>

      <!-- Permission Modal -->
      <div class="modal fade permission-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title text-center" id="mySmallModalLabel">You need to be logged in to do that!</h4>
              <div class="text-center">
                <a type="button" class="btn btn-default nav-buttons center" id="login-modal-button" data-toggle="modal" data-target=".login-modal">Login</a>
                <a type="button" class="btn btn-default nav-buttons purp-button" id="signup-modal-button" data-toggle="modal" data-target=".signup-modal">Sign Up</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    
      <!-- Login modal -->
      <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title loginTitle" id="mySmallModalLabel">Welcome back!</h4>
			        {{ Form::open(array('action' => 'UsersController@doLogin')) }}
								@if ($errors->has('email'))
								<div class="alert alert-danger">{{ $errors->first('name', '<span class="help-block">:message</span>') }}</div>
								@endif
								<fieldset class="form-group">
									{{ Form::label('email', 'Email') }}
									{{ Form::text('email', Input::old('Email'), ['class' => 'form-control', 'placeholder' => 'Your Email']) }}
								</fieldset>
								@if ($errors->has('password'))
								<div class="alert alert-danger">{{ $errors->first('password', '<span class="help-block">:message</span>') }}</div>
								@endif
								<fieldset class="form-group">
									{{ Form::label('password', 'Password') }}
									{{ Form::password('password', ['class' => 'form-control', 'placeholder' => ' Enter Your Password']) }}
								</fieldset>
								<button type="submit" class="btn btn-success center-block">CLICK TO LOG IN</button>
							{{ Form::close() }}
              <div class="text-center modal-links">
                  <a class="modal-link" data-toggle="modal" data-target=".signup-modal" data-dismiss="modal">Don't Have An Account? >></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Signup modal -->
      <div class="modal fade signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title text-center" id="mySmallModalLabel">Let's Get Started!</h4>
							{{ Form::open(array('action' => 'UsersController@store')) }}
								@if ($errors->has('username'))
								<div class="alert alert-danger">{{ $errors->first('name', '<span class="help-block">:message</span>') }}</div>
								@endif
								<fieldset class="form-group">
									{{ Form::label('username', 'Username') }}
									{{ Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'Create a Username']) }}
								</fieldset>
								@if ($errors->has('first_name'))
								<div class="alert alert-danger">{{ $errors->first('name', '<span class="help-block">:message</span>') }}</div>
								@endif
								<fieldset class="form-group">
									{{ Form::label('first_name', 'First Name') }}
									{{ Form::text('first_name', Input::old('first_name'), ['class' => 'form-control', 'placeholder' => 'Your First Name']) }}
								</fieldset>
								@if ($errors->has('last_name'))
								<div class="alert alert-danger">{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}</div>
								@endif
								<fieldset class="form-group">
									{{ Form::label('last_name', 'Last Name') }}
									{{ Form::text('last_name', Input::old('last_name'), ['class' => 'form-control', 'placeholder' => 'Your Last Name']) }}
								</fieldset>
								@if ($errors->has('email'))
								<div class="alert alert-danger">{{ $errors->first('email', '<span class="help-block">:message</span>') }}</div>
								@endif
								<fieldset class="form-group">
									{{ Form::label('email', 'Email') }}
									{{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'Your Email']) }}
								</fieldset>
								@if ($errors->has('password'))
								<div class="alert alert-danger">{{ $errors->first('password', '<span class="help-block">:message</span>') }}</div>
								@endif
								<fieldset class="form-group">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Create a Password']) }}
                </fieldset>
                <fieldset class="form-group">
									{{ Form::label('confirmPassword', 'Confirm Password') }}
									{{ Form::password('confirmPassword', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) }}
								</fieldset>
								<button type="submit" class="btn btn-success center-block">CLICK TO SIGN UP</button>
							{{ Form::close() }}
              <div class="text-center modal-links">
                  <a class= "modal-link" data-toggle="modal" data-target=".login-modal" data-dismiss="modal">Already Have An Account? >></a>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End signup modal -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- END NAVBAR -->