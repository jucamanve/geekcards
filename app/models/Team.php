<?php

// app/models/Team.php

class Team extends Eloquent
{
	//********************************************
	//********** Properties **********************
	//********************************************
	/**
	 * The model uses soft deletes.
	 *
	 * @var string
	 */
	protected $softDelete = true;

	/**
	 * The attributes .
	 *
	 * @var array
	 */
	protected $hidden = array('deleted_at');


	//********************************************
	//********** Relationships methods ***********
	//********************************************
	/** 
	 * Get the divisions of the team
	 * @return 
	 */
	public function divisions()
	{
		return $this->hasMany('Division');
	}

	/** 
	 * Get the members (users) of the team
	 * 
	 * @return 
	 */
	public function users()
	{
		return $this->hasMany('User');
	}

	/** 
	 * Get the offices of the team
	 * 
	 * @return 
	 */
	public function offices()
	{
		return $this->hasMany('Office');
	}

}