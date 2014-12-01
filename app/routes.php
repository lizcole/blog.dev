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

Route::get('/', function()
{
	return View::make('hello');
}); 

Route::get('resume', function()
{
	return "This is my resume";
});

Route::get('portfolio', function()
{
	return "This is my portfolio";
});

Route::get('rolldice/{guess}', function($guess){
	$roll_dice = mt_rand(1, 6); 
	$data = [
		'roll_dice' => $roll_dice,
		'guess' => $guess
	];
	return View::make('roll_dice', $data);
});
