<?php

class MainController extends BaseController {

	

	public function getIndex()
	{
		return View::make('main.index');
	}

	// Get Time
	public function getTime()
	{
		return date('h:i:s a, M d, Y');
	}

}
