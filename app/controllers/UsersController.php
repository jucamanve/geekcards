<?php

use Illuminate\Support\MessageBag;

class UsersController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Users Controller API
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function getAllUsers()
	{
		$users = User::all();
		// return $users;
		return View::make('all-users', compact('users'));
	}

	public function getUser(User $user)
	{
		return $user;
	}

	public function createUser()
	{
		$user = new User;
		// TODO: Verificar la presencia de todos los parametros en el request 
		// antes de intentar asignarlos al modelo
		if (Input::has('name'))			$user->name = Input::get('name');
		if (Input::has('email'))		$user->email = Input::get('email');
		if (Input::has('password'))		$user->password = Hash::make( Input::get('password') );
		if (Input::has('team_id'))		$user->team_id = Input::get('team_id');
		if (Input::has('team_admin'))	$user->team_admin = Input::get('team_admin');
		$user->save();

		return $user;
		// return Redirect::action('UsersController@allUsersForm');
	}

	public function updateUser(User $user)
	{
		// $user = User::findOrFail($user->id);
		if (Input::has('name'))			$user->name = Input::get('name');
		if (Input::has('email'))		$user->email = Input::get('email');
		if (Input::has('password'))		$user->password = Input::get('password');
		if (Input::has('team_id'))		$user->team_id = Input::get('team_id');
		if (Input::has('team_admin'))	$user->team_admin = Input::get('team_admin');
		$user->save();

		return $user;
		// return Redirect::action('UsersController@allUsersForm');
	}

	public function deleteUser(User $user)
	{
		// $user = User::findOrFail(Input::get('id'));
		$user->delete();
		return $user;
	}

	/*
	|------------------------------------------------------------
	| Team Controller Views
	|------------------------------------------------------------
	|
	*/
	public function defaultView()
	{
		// return View::make('users/login');
		return Redirect::to('/login');
	}

	public function loginAction()
	{
		$errors = new MessageBag();

		if ($old = Input::old("errors"))
		{
			$errors = $old;
		}

		$data = array("errors" => $errors);

		if (Input::server("REQUEST_METHOD") == "POST")
		{
			$validator = Validator::make(Input::all(), array("username" => "required",
															 "password" => "required"));

			if ($validator->passes())
			{
				// echo "Autenticado";
				// return View::make('all-users');
				$credentials = array('name' => Input::get("username"),
									 'password' => Input::get("password"));
				if (Auth::attempt($credentials))
				{
					echo "Entró";
					return Redirect::to('/members');
				}
			}

			// echo "Desconocido";
			echo var_dump($credentials);
			$data["errors"] = new MessageBag(array("password" => "Usuario o contraseña invalidos"));
			$data["username"] = Input::get("username");

			return Redirect::to("/login")->withInput($data);
		}

		return View::make('users/login', $data);
	}

	public function allUsersForm()
	{
		$users = User::all();
		return View::make('all-users', compact('users'));
	}

	public function showNewUserForm()
	{
		// return 'showNewUserForm';
		return View::make('new-user');
	}

	public function showEditUserForm(User $user)
	{
		// return 'showEditUserForm';
		return View::make('edit-user', compact('user'));
	}

}