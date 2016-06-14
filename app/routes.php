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

Route::get('/', function()
{
	return View::make('home');
});

Route::resource('questions', 'QuestionsController');
Route::resource('users', 'UsersController');
Route::resource('/votes', 'VotesController');

Route::post('/login', 'UsersController@doLogin');
Route::get('/logout', 'UsersController@logout');

#Post Answers
Route::post('/questions/{question}', 'AnswersController@store');
Route::get('/questions/{question}', 'AnswersController@show');

#Delete Answers
Route::post('/questions/{answer}', 'AnswersController@destroy');