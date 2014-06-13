<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offices', function($table)
		{
			$table->increments('id');
			$table->string('name', 128);
			// Address
			$table->string('continent', 128)->nullable();
			$table->string('country', 128);
			$table->string('state', 128);
			$table->string('city', 128);
			$table->string('address', 256);
			$table->string('postcode', 20)->nullable();
			$table->string('phone', 20)->nullable();
			// foreign keys
			$table->unsignedInteger('team_id');
			$table->foreign('team_id')->references('id')->on('teams');
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
		Schema::drop('offices');
	}

}
