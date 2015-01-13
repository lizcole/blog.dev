@extends('layouts.master')

@section('content')

	<h1>Roll Dice Game</h1>

	<p>You guessed: {{{ $guess }}} </p>

	<p>You rolled a: {{{ $roll_dice }}} </p>

	{{-- Inform user if they guess the correct roll --}}

	@if ($guess == $roll_dice)
		<p>You guessed it!</p>
	@else 
		<p>You didn't guess it, try agian!</p>
	@endif

	@for ($i = 1; $i <= 6 ; $i++)
<!-- 		<a href="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{ $i }}}</a>
 -->		{{ link_to_action('HomeController@rollDice', "Guess $i", [$i], ['class' => 'btn btn-success btn-xs']) }}
	@endfor

@stop
