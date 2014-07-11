<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHomepage()
	{
		// return View::make('hello');
		return View::make('homepage');
	}

	public function showResume($name)
	{
		$data = array(
			'name' => $name
		);
		return View::make('resume')->with($data);
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showCreate()
	{
		return View::make('create');
	}

	public function showLogin() 
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password'); 
		
		if (Auth::attempt(array('email'=>$email, 'password' => $password)))
		{
			Session::flash('infoMessage', 'You are now logged in!');
			return Redirect::intended('posts');
		}
		else
		{
			Session::flash('errorMessage', "Email or password not found.");
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
}	

