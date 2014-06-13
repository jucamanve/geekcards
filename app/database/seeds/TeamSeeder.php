<?php

class TeamSeeder extends Seeder {

	/**
	 * Run teams seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('teams')->delete();

		// $hashed = Hash::make('secreto');

		DB::table('teams')->insert(array(
			array(	'name'=>'4geeks'),
			array(	'name'=>'4girls'),
			array(	'name'=>'4gomez'),
			array(	'name'=>'4gallos'),
		));

		// $user = User::create(
		// 						array(	'username' => 'philipbrown',
		// 								'email' => 'phil@ipbrown.com',
		// 								'password' => $hashed)
		// 					);
		// $user = User::create(
		// 						array(	'username' => 'barfoo',
		// 								'email' => 'foo@bar.com',
		// 								'password' => $hashed)
		// 					);
		// $user = User::create(
		// 						array(	'username' => 'Jucaman',
		// 								'email' => 'jucaman@gmail.com',
		// 								'password' => $hashed)
		// 					);
	}

}