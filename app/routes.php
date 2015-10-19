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
Route::get('master2', function()
{
    return View::make('master2');
});
//return dashboard
Route::get('dashboard1', function()
{
    return View::make('dashboard1');
});

Route::get('login', function()
{
	return View::make('login');
});

Route::get('home2', function()
{
	return View::make('home2');
});



//return managing view for team
Route::get('team/manage', array('uses'=>'TeamController@index'));
//return form for adding team member
Route::post('team/add', array('uses'=>'TeamController@store'));
//return form for editing team member
Route::get('team/edit/{id}', array('uses'=>'TeamController@edit'));
//delete the Member fom the team list
Route::post('team/delete/{id}', array('uses'=>'TeamController@destroy'));
/////////////////// End team //////////////////////////

//return managing view for contacts
Route::get('contacts/manage', array('uses'=>'ContactsController@index'));
//return form for adding team contacts
Route::post('contacts/add', array('uses'=>'ContactsController@store'));
/////////////////// End contacts //////////////////////////

////return managing view for Services
Route::get('service/manage', array('uses'=>'ServeceController@index'));
//return form for adding  Services
Route::post('service/add', array('uses'=>'ServeceController@store'));
//return form for editing service
Route::get('service/edit/{id}', array('uses'=>'ServeceController@edit'));
//delete the Service fom the list
Route::post('service/delete/{id}', array('uses'=>'ServeceController@destroy'));

/////////////////// End Services ///////////////////////

/////////return managing view for Gallery
Route::get('gallery/manage', array('uses'=>'GalleryController@index'));
//return form for adding team Gallery
Route::post('gallery/add', array('uses'=>'GalleryController@store'));
//return form for editing gallery
Route::get('gallery/edit/{id}', array('uses'=>'GalleryController@edit'));
//delete the Service fom the gallery
Route::post('gallery/delete/{id}', array('uses'=>'GalleryController@destroy'));
/////////////////// End Gallery //////////////////////////

///////////return managing view for News
Route::get('news/manage', array('uses'=>'NewsController@index'));
//return form for adding  News
Route::post('news/add', array('uses'=>'NewsController@store'));
/////////////////// End News //////////////////////////

/////////////return managing view for Sliding Pic
Route::get('colousel/manage', array('uses'=>'ColouselController@index'));
//return form for adding  Sliding Pic
Route::post('colousel/add', array('uses'=>'ColouselController@store'));
/////////////////// End Sliding Pic //////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Managing user actions
 * Directing routes to correct controllers
 */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//validating user during login
Route::post('login',array('as'=>'login', 'uses'=>'UserController@validate'));

//loging a user out
Route::get('logout',array('as'=>'logout', 'uses'=>'UserController@logout'));






//display a form to add new user
Route::get('user',array('as'=>'adduser', 'uses'=>'UserController@index'));

//display adding form
Route::get('user/add',array('as'=>'adduser1', 'uses'=>'UserController@create'));
//adding new user
Route::post('user/add',array('as'=>'adduser1', 'uses'=>'UserController@store'));

//viewing list of users
Route::get('user/list',array('as'=>'listuser', 'uses'=>'UserController@listUser'));

//display a form to edit users information
Route::get('user/edit/{id}',array('as'=>'edituser', 'uses'=>'UserController@edit'));

//editng users information
Route::post('user/edit/{id}',array('as'=>'edituser', 'uses'=>'UserController@update'));

//deleting user
Route::post('user/delete/{id}',array('as'=>'deleteuser', 'uses'=>'UserController@destroy'));

//display a system usage log for a user
Route::get('user/log/{id}',array('as'=>'userlog', 'uses'=>'UserController@show'));


