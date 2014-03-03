<?php

class LandingController extends BaseController {

	public function getIndex()
	{
		Session::put('active', 'landing');
		return View::make('landing.index');
	}

	public function getPage($view)
	{
		Session::put('active', 'landing/page/'.$view);
		return View::make('landing.'.$view);
		
	}

	public function getAdmin()
	{
		return Redirect::to('auth/login');
	}


	
}
