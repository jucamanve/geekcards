<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
	//********************************************
	//********** Properties **********************
	//********************************************
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * The model uses soft deletes.
	 *
	 * @var string
	 */
	protected $softDelete = true;

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	//********************************************
	//********** Relationships methods ***********
	//********************************************
	/**
	 * User belongs to many Divisions
	 * @return 
	 */
	public function divisions()
	{
		return $this->belongsToMany('Division');
	}
	/** 
	 * User belongs to an Team
	 */
	public function team()
	{
		return $this->belongsTo('Team');
	}
}