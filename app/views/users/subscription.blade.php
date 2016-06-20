@extends('layouts.master')

@section('title')
    Subscribe
@stop

@section('content')
<div class="container">
    <h1>Subscriptions</h1>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="thumbnail">
            <div class="caption">
                <h2>Monthly Subscription</h2>
                <h3>$4.99/month</h3>
                <p>Want to improve your specifix experience? How about signing up for a premium membership, where you will have access to expert knowledge, and your questions will always be featured at the top of the list. Try it out!</p>
                <form action="/subscription" method="POST">
                  <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_q0cXMhVKaYM4JB8Y8ao1mU3o"
                    data-amount="499"
                    data-name="Specifix"
                    data-description="Monthly Subscription"
                    data-image="/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-zip-code="true">
                  </script>
                </form>
            </div>
        </div>
    </div>
</div>

@stop