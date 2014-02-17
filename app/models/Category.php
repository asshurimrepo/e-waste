<?php

class Category extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	/*Relationships*/
	public function managements()
	{
		return $this->belongsToMany('Management');
	}
}
