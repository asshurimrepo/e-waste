<?php

class AuthController extends BaseController {

	public function getLogin()
	{
		return View::make('login');
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/auth/login')->with('suc2', 'You have succesfully Logout!');
	}

	public function postCheck()
	{

		// return Input::all();
		$credentials = [
			'username'=>Input::get('username'),
			'password'=>Input::get('password')
		];	

		if(Auth::attempt($credentials)){
			return Redirect::to('/');
		}

		return Redirect::back()->with('err','Username and Passwrod Did not match! </b>')->withInput();

	}

}
