@extends('layouts.master')

@section('content')

<h1>Whats your guess?</h1>

	@for ($i = 1; $i <= 6 ; $i++)
<!-- 		<a href="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{ $i }}}</a>
 -->		{{ link_to_action('HomeController@rollDice', "Guess $i", [$i], ['class' => 'btn btn-success btn-xs']) }}
	@endfor

@stop