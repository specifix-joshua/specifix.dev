@extends('layouts.master')

@section('title')
FAQ
@stop

@section('content')
<div class="container faq-container">
  <h1 class="faq-title">FAQ</h1>
  <div class="content">
  <h3 class="faq-subtitle">Subscriptions</h3>
  <div>
    <input type="checkbox" id="question1" class="questions">
    <label for="question1" class="question">
      How do I subscribe to Premium Services?
    </label>
    <div class="answers">
     Go to our premium membership page. Enter your payment information, and hit submit. It's that simple!
    </div>
  </div>

  <div>
    <input type="checkbox" id="question2" class="questions">
    <label for="question2" class="question">
      I have cancelled my membership, but I still appear as a premium user. Why?
    </label>
    <div class="answers">
      When you cancel your membership, you will remain premium until the end of the subscription month. This is called your grace period. Once the month is over, you will no longer be labeled as premium.
    </div>
  </div>
    
  <div>
    <input type="checkbox" id="question3" class="questions">
    <label for="question3" class="question">
      If I resume my subscription, will I still be charged twice?
    </label>
    <div class="answers">
      Not at all! When you resume your subscription, you will be charged on the original billing cycle.
    </div>
  </div>

    <h3 class="faq-subtitle">Posting Questions</h3>
    <div>
        <input type="checkbox" id="question4" class="questions">
        <label for="question4" class="question">
        How do I post a question?
        </label>
        <div class="answers">
            Go to create a question. Fill in the form and hit submit. Don't forget to choose a language to increase the chances of someone answering your question!
        </div>
      </div>

        <div>
        <input type="checkbox" id="question5" class="questions">
        <label for="question5" class="question">
        Can I delete or update my question?
        </label>
        <div class="answers">
            No, sorry. Please provide as many details and information as you can when you first post a question.
        </div>
      </div>

      <h3 class="faq-subtitle">Answering Questions</h3>
      <div>
      <input type="checkbox" id="question6" class="questions">
        <label for="question6" class="question">
        How do I answer someone's question?
        </label>
        <div class="answers">
            Make sure you are logged in.
        </div>
      </div>

      <div>
      <input type="checkbox" id="question7" class="questions">
        <label for="question7" class="question">
        How will I know when someone answers my question?
        </label>
        <div class="answers">
            You will receive a notification in your inbox.
        </div>
      </div>

      <h3 class="faq-subtitle">Votes and Score</h3>

      <div>
      <input type="checkbox" id="question8" class="questions">
        <label for="question8" class="question">
        How do I increase my score?
        </label>
        <div class="answers">
            Answer questions efficiently and try to gain other user's upvotes.
        </div>
      </div>
  </div>
</div>
@stop