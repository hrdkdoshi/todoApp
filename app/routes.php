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

//Route::resource('tasks', 'Tasks_Controller');
Route::get('tasks', array('as' =>'tasks', 'uses' => 'tasks@index'));
Route::get('task/{id}', array('as' => 'task', 'uses'=>'tasks@view'))->where('id', '[0-9]+');

Route::get('tasks/new', array('as'=> 'new_task', 'uses'=>'tasks@newtask'));

Route::post('tasks/create', array('uses'=>'tasks@create'));

Route::get('task/{id}/edit', array('as' => 'edit_task', 'uses'=> 'tasks@edit'));

Route::put('task/update', array('uses' => 'tasks@update'));

Route::delete('task/delete', array('uses' => 'tasks@destroy'));
/*Route::get('tasks', function() {
	return View::make('tasks');
});*///

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
