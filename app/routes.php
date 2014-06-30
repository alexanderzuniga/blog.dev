<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@showWelcome');									//to reach file named "my_first_view" 

Route::get('/sayHello/{name}', function($name)
{
	if ($name == "Alex")
    {
        return Redirect::to('/');
    }
    else
    {
		$data = array(	
			'name' => $name
			);
		return View:: make('temp.my_first_view')->with($data);
    }
});

Route::get('/portfolio', "HomeController@showPortfolio");

Route::get('/resume/{param}', "HomeController@showResume");


//***** ROLL DICE ROUTE *****
Route::get('/rolldice/{param}', function($guess) {
	$random = mt_rand(1,1);

//encasing the varables to be passed to html via $data
	$data = array(
		'random' => $random,
		'guess' => $guess
	);
	return View::make('temp.roll_dice')->with($data);
});
