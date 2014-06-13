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

// Bind route parameter 'user' to model 'User'
Route::model('user', 'User');
// Show forms
Route::get('/', 'UsersController@defaultView');
Route::any('/login', 'UsersController@loginAction');
Route::get('/members', 'UsersController@allUsersForm');
Route::get('/users/new', 'UsersController@showNewUserForm');
Route::get('/users/edit/{user}', 'UsersController@showEditUserForm');
// Handle API submissions
Route::get('/users', 'UsersController@getAllUsers');
Route::get('/users/{user}', 'UsersController@getUser');
Route::post('/users', 'UsersController@createUser');
Route::post('/users/{user}', 'UsersController@updateUser');
Route::post('/users/delete/{user}', 'UsersController@deleteUser');


// Bind route parameter 'team' to model 'Team'
Route::model('team', 'Team');
// Show forms
// Route::get('/teams/all', 'TeamsController@showAllTeamsForm');
Route::get('/teams/new', 'TeamsController@showNewTeamForm');
Route::get('/teams/edit/{team}', 'TeamsController@showEditTeamForm');
// Handle API submissions
Route::get('/teams', 'TeamsController@readAllTeams');
Route::get('/teams/{team}', 'TeamsController@readTeam');
Route::get('/directory/{team}', 'TeamsController@getTeamDirectory');
Route::post('/teams', 'TeamsController@createTeam');
Route::post('/teams/{team}', 'TeamsController@updateTeam');
Route::post('/teams/delete/{team}', 'TeamsController@deleteTeam');
















// Route::get('test1', function()
// {
// 	$team = new Team;
// 	$team->name = '4gomez';
// 	$team->save();

// 	$user = new User;
// 	$user->email = 'mgomes3@4gomez.com';
// 	$user->password = 'sdflhilksdflknasdflk';
// 	// $user->level_id = 1;
// 	$user->team()->associate($team);
// 	$user->save();

// 	$div = new Division;
// 	$div->name = 'División de recursos de explotación';
// 	$div->team()->associate($team);
// 	$div->save();

// 	// $div->users()->save($user);
// 	// $div->users()->attach($user->id, array('job_title' => 'Perssonel'));
// 	$user->divisions()->attach($div->id, array('job_title' => 'Perssoneler'));

// 	echo 'Listo...';
// });