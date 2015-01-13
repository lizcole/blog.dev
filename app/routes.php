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

Route::get('/', 'HomeController@homePage');

Route::get('hello{name}', 'HomeController@showWelcome', ['Liz']);

Route::get('rolldice', 'HomeController@showGuesses');
Route::get('rolldice/{guess}', 'HomeController@rollDice');

Route::get('resume', 'HomeController@showResume');
Route::get('portfolio', 'HomeController@showPortfolio');


Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::resource('posts', 'PostsController');

// Route::get('index', function(){
// 	$post = Post::all();

// });

?>
