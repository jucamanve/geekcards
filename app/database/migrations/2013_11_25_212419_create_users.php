<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			// Auth columns
			$table->increments('id');
			$table->string('email', 128)->unique();
			$table->string('password', 128);
			// Personal info
			$table->string('name', 128)->nullable();
			$table->string('lastname', 128)->nullable();
			$table->string('nickname', 128)->nullable();
			$table->date('birth_date')->nullable();
			$table->enum('gender', array('m', 'f'))->nullable();
			$table->string('personal_email', 128)->nullable();
			$table->string('mobile', 20)->nullable();
			$table->string('phone', 20)->nullable();
			$table->binary('picture')->nullable();
			$table->text('personal_skills')->nullable();
			$table->string('website_link', 256)->nullable();
			$table->string('twitter_link', 256)->nullable();
			$table->string('facebook_link', 256)->nullable();
			$table->string('linkedin_link', 256)->nullable();
			$table->string('aboutme_link', 256)->nullable();
			$table->string('instagram_link', 256)->nullable();
			$table->string('youtube_link', 256)->nullable();
			$table->string('pinterest_link', 256)->nullable();
			$table->string('geekcards_link', 256)->nullable();
			// Professional info
			$table->text('professions')->nullable();
			$table->text('pro_skills')->nullable();
			$table->text('bio')->nullable();
			// Corporative info
			$table->integer('mentor_id')->unsigned()->nullable();
			$table->smallInteger('level_id')->default(1);
			$table->enum('status', array('active', 'vacations', 'sick','suspended', 'out'))->default('active');
			$table->string('rank', 128)->nullable();
			$table->date('admission_date')->nullable();
			$table->date('exit_date')->nullable();
			// foreing keys
			$table->integer('team_id')->unsigned();
			$table->foreign('team_id')->references('id')->on('teams');

			$table->integer('office_id')->unsigned()->nullable();
			$table->foreign('office_id')->references('id')->on('offices');
			// geekcards
			$table->boolean('team_admin')->default(false);
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
		Schema::dropIfExists('users');
	}

}
