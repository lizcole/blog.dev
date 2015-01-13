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

	public function homePage() {
		return View::make('homepage');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showGuesses()
	{
		return View::make('home_guesses');
	}

	public function rollDice($guess) 
	{
		$roll_dice = mt_rand(1, 6); 

		$data = [
			'roll_dice' => $roll_dice,
			'guess' => $guess
		];

		return View::make('roll_dice', $data);
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{	
		return "This is my portfolio";
	}


	public function showLogin()
	{	
		return View::make('login');
	}

	public function doLogin(){

		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/posts');
		} else {
		    Session::flash('errorMessage', 'Username or Password incorrect');

		    return Redirect::back();
		}
	}

	public function doLogout(){
		Auth:: logout();

		return Redirect::action('PostsController@index');
	}

}

