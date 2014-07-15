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
Route::get('/homepage', 'HomeController@showHomepage');
Route::get('/blog', 'HomeController@showBlog');

Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');

							//to reach file named "my_first_view" 


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
Route::resource('posts', 'PostsController');

Route::get('/orm-test', function() {
	// $post = Post::all();

	// foreach ($posts as $post) {
	// 	echo $post->title . "<br>";
	// 	echo $post->body . "<br>";
	// }
	$post = Post::find(1);
		echo $post->title . "<br>";
		echo $post->body . "<br>";
	
	$post->title = "This is a new title"; //reassigning the title 
	$post->save(); 						 // saves to the database. (hella convenient)

	// $post->delete();    // you can specify the item id within the ()
	return "Eloquent ORM is easy";

});
