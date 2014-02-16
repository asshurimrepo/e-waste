<?php

class Internet extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function services()
	{
		return $this->belongsToMany('Service');
	}
}
