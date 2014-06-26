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
Route::get('/', function(){	
	return View::make('temp.my_first_view'); //temp is a folder that we navigate thru with "."
});											//to reach file named "my_first_view" 

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

Route::get('/portfolio', function() {    // blog.dev/portfolio
	return "This is my portfolio.";
});
Route::get('/resume', function(){		 // blog.dev/resume
	return "This is my resume.";
});

Route::get('/rolldice/{param}', function($guess) {
	$random = mt_rand(1,1);

//encasing the varables to be passed to html via $data
	$data = array(
		'random' => $random,
		'guess' => $guess
	);
	return View::make('temp.roll_dice')->with($data);
});
