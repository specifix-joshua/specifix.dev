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

Route::get('/premium', 'QuestionsController@getPremiumQuestions');

Route::resource('questions', 'QuestionsController');
Route::resource('answers', 'AnswersController');
Route::resource('users', 'UsersController');
Route::resource('/votes', 'VotesController');
Route::resource('/notifications', 'NotificationsController');

#Login and Logout
Route::post('/doLogin', 'UsersController@doLogin');
Route::get('/logout', 'UsersController@logout');

#Display Subscription Page
Route::get('/subscription', 'UsersController@subscribe');

#Create a subscription
Route::post('/subscription', 'UsersController@createSubscription');

#Cancel Subscription
Route::get('/subscription/{id}/cancel', 'UsersController@cancelSubscription');



