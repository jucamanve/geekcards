<?php

use Illuminate\Database\Migrations\Migration;

class CreateDivisionUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('division_user', function($table)
		{
			$table->string('job_title', 128);
			// foreign keys
			$table->integer('division_id')->unsigned();
			$table->foreign('division_id')->references('id')->on('divisions');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			// laravels
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('division_user');
	}

}