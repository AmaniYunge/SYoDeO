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

Route::get('about', function()
{
    return View::make('about');
});

Route::get('who', function()
{
    return View::make('who');
});

Route::get('team', function()
{
    return View::make('team');
});

Route::get('service', function()
{
    return View::make('service');
});

Route::get('gallery', function()
{
    return View::make('gallery');
});

Route::get('contact', function()
{
    return View::make('contact');
});

Route::get('mission', function()
{
    return View::make('mission');
});

Route::get('vision', function()
{
    return View::make('vision');
});

Route::get('goals', function()
{
    return View::make('goals');
});


Route::get('volunteer', function()
{
    return View::make('volunteer');
});

