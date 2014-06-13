<?php

class TeamsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Teams API
	|--------------------------------------------------------------------------
	| 
	|
	*/
	public function createTeam()
	{
		$team = new Team();
		$team->name = Input::get('name');
		if (Input::has('head_office'))	$team->head_office = Input::get('head_office');
		$team->save();

		// return Redirect::action('TeamsController@showAllTeamsForm');
		return $team;
	}

	public function readTeam(Team $team)
	{
		return $team;
	}

	public function updateTeam(Team $team)
	{
		// $team = Team::findOrFail(Input::get('id'));
		$team->name = Input::get('name');
		$team->head_office = Input::get('head_office');
		$team->save();

		// return Redirect::action('TeamsController@showAllTeamsForm');
		return $team;
	}

	public function deleteTeam(Team $team)
	{
		// $team = Team::findOrFail(Input::get('id'));
		$team->delete();
		return $team;
	}

	// TODO: Quitar este metodo. No es útil.
	public function readAllTeams()
	{
		$teams = Team::all();
		return $teams;
	}

	/*
	|------------------------------------------------------------
	| Teams Methods
	|------------------------------------------------------------
	|
	*/
	public function getTeamDirectory(Team $team)
	{
		$offices = Office::all();
		$divisions = Division::all();
		$users = User::where('team_id', '=', $team->id)->get( array('id', 'email', 'name', 'lastname') );

		$data = array();
		// $data['team'] = json_encode($team);
		$data['team'] = $team->getAttributes();
		$data['offices'] = $offices->ToArray();
		$data['divisions'] = $divisions->ToArray();
		$data['users'] = $users->ToArray();

		return $data;
	}

	/*
	|------------------------------------------------------------
	| Teams Views
	|------------------------------------------------------------
	|
	*/
	public function showNewTeamForm()
	{
		return View::make('hello');
	}

	public function showEditTeamForm()
	{
		return View::make('hello');
	}

}