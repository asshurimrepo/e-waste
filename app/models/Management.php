<?php

class Management extends Eloquent {
	protected $guarded = array();

	public static $rules = array();


	/*Scopes*/
	public function scopeLatest($q)
	{
		return $q->orderBy('id', 'asc');
	}

	/*Relationships*/
	public function internet()
	{
		return $this->belongsTo('Internet');
	}

	public function technique()
	{
		return $this->belongsTo('Technique');
	}

	public function categories()
	{
		return $this->belongsToMany('Category');
	}
}
