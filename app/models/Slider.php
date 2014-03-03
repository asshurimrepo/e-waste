<?php

class Slider extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function scopeRandom($q)
	{
		return $q->orderBy(DB::raw('RAND()'));
	}
}
