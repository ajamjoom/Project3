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
	return View::make('index');
});

Route::get('/lorem_ipsum_generator', function()
{
	return View::make('lorem_ipsum_generator');
});
Route::post('/lorem_ipsum_generator', function()
{
	return View::make('lorem_ipsum_generator');
});

Route::get('/user_generator', function()
{
	return View::make('user_generator');
});
Route::post('/user_generator', function()
{
	return View::make('user_generator');
});

Route::get('/password_generator', function()
{
	return View::make('password_generator');
});

Route::post('/password_generator', function()
{
	return View::make('password_generator');
});

