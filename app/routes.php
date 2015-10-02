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


Route::get('donation', function()
{
    return View::make('donation');
});

Route::get('master1', function()
{
    return View::make('master1');
});
//return dashboard
Route::get('dashboard1', function()
{
    return View::make('dashboard1');
});

//return managing view for team
Route::get('team/manage', array('uses'=>'TeamController@index'));
//return form for adding team member
Route::post('team/add', array('uses'=>'TeamController@store'));
/////////////////// End User //////////////////////////

//return managing view for contacts
Route::get('contacts/manage', array('uses'=>'ContactsController@index'));
//return form for adding team contacts
Route::post('contacts/add', array('uses'=>'ContactsController@store'));
/////////////////// End User //////////////////////////
