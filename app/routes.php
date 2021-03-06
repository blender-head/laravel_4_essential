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
	return View::make('hello');
});

Route::get('my/page', function() {
	return 'Hello world!';
});

/*
Route::get('/', array(
	'before' => 'birthday',
	function()
	{
		return View::make('hello');
	}
));
*/

/*
Route::get('/', array(
	'before' => 'birthday:12/12',
	function()
	{
		return View::make('hello');
	}
));
*/

Route::filter('birthday', 'BirthdayFilter');