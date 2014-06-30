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

	public function showWelcome()
	{
		// return View::make('hello');
		return Redirect::action('HomeController@showPortfolio');
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

}
