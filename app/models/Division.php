<?php

// app/models/Division.php

class Division extends Eloquent
{
	//********************************************
	//********** Relationships methods ***********
	//********************************************
	/** 
	 * Division belongs to a Team
	 */
	public function team()
	{
		return $this->belongsTo('Team');
	}
	/** 
	 * Division has many members (User)
	 */
	public function users()
	{
		return $this->belongsToMany('User');
	}
}