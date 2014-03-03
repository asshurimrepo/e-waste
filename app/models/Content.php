<?php

class Content extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function scopeRef($q, $ref)
	{
		return $q->where('ref', $ref)->first()->content;
	}
}
