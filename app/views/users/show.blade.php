@extends('layouts.master')

@section('title-tag')
    Your Profile
@stop

@section('top-links')
	
@stop

@section('content')
<!-- USER INFO -->
<div class="container-fluid">
	<div class="row">
		<div class=" col-xs-12">
	        <div class="col-sm-12">
	        	<div class="row col-xs-12">
		            <div id="user-title" class="col-xs-6">
		                <h1 >Welcome, {{{ $user['first_name'] }}}!</h1>
	            	</div>             
		            <div id="writeQuotes" class="col-xs-6 text-right">
		                <p id="quote"> </p>
		                <p id="author"> </p>
		            </div>
		        </div>
	        </div>
	    </div>
	</div>
</div>
<!-- END USER INFO -->

<!-- USER'S ADS -->
<div class="profile-ads">
	<div class="container">
		

		<hr class="ad-divider">
        <?php var_dump($questions)?>
        

	</div>
</div>
<!-- END USER'S ADS -->
@stop