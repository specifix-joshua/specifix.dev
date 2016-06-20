<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#Homepage
Route::get('/', function()
{
	return View::make('home');
});

#notifications
Route::get('/messages', function()
{
	return View::make('messages');
});

Route::resource('questions', 'QuestionsController');
Route::resource('answers', 'AnswersController');
Route::resource('users', 'UsersController');
Route::resource('/votes', 'VotesController');
Route::resource('/notifications', 'NotificationsController');

#Login and Logout
Route::post('/login', 'UsersController@doLogin');
Route::get('/logout', 'UsersController@logout');

Route::post('/subscription/', function(){

    $token = Input::get('stripeToken');
    Auth::user()->subscription('monthly')->create($token);
    return 'Done';

});

Route::get('/subscription', 'UsersController@subscribe');

Route::get('/subscription/{id}/cancel', 'UsersController@cancelSubscription');


