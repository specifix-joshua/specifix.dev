@extends('layouts.master')

@section('title')
    Subscribe
@stop

@section('content')
<div class="container">
<div class="row">
    <h1>Subscriptions</h1>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="thumbnail subsBox">
            <div class="caption">
                <h2 class="subscriptionTitles">Monthly Subscription</h2>
                <h3 class="subsPrice">$4.99/month</h3>
                <p>Want to improve your specifix experience? How about signing up for a premium membership, where you will have access to expert knowledge, and your questions will always be featured in the premium question page. Try it out!</p>
                @if(Auth::check() && Auth::user() && Auth::id() == Auth::user()->id && !Auth::user()->subscribed())
                        {{Form::open(array('action' => 'UsersController@createSubscription')) }}
                          <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_q0cXMhVKaYM4JB8Y8ao1mU3o"
                            data-amount="499"
                            data-name="Specifix"
                            data-description="Monthly Subscription"
                            data-image="/img/specifix-bounty.png"
                            data-locale="auto"
                            data-zip-code="true"
                          </script>
                        {{ Form::close() }}
                    @else
                    <p><small>You are already subscribed to this service!</small></p>
                @endif
            </div>
        </div>
    </div>

    @if(Auth::check() && Auth::user() && Auth::id() == Auth::user()->id && Auth::user()->cancelled())
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="thumbnail subsBox">
                <div class="caption">
                <h2 class="subscriptionTitles">Resume Subscription</h2>
                <h3 class="subsPrice">Original Subscription: $4.99/month</h3>
                <p>If you have cancelled your subscription, you have the option to resume it. Don't worry, you will not be charged right away if you are currently on a grace period. We will wait until the next billing cycle.</p>
                <p><a href="{{{ action('UsersController@resumeSubscription', Auth::user()->id) }}}">Resume Subscription</a></p>
                </div>
            </div>
        </div>
    @endif
</div>
</div>

@stop