<?php

class Technique extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function managements()
	{
		return $this->hasMany('Management');
	}
}
