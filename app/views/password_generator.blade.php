@extends('_master')
 @section('title')
 		xkcd password generator
@section('head')
	<link rel='stylesheet' href='pass_style.css' type='text/css'>
	<?php require 'pass_gen_logic.blade.php'; ?>
@stop 
 @stop

 @section('content')
 
 <a class='home' href = '/'>Home</a>

<h1>xkcd Password Generator</h1>

<div class = "password"><?php echo $password ?></div>
	
	{{ Form::open(array('url' => '/password_generator', 'method' => 'POST')) }}
	
	{{ Form::label('number_of_words', 'Number of words:', array('id' => 'password_generator')) }}
	{{ Form::text('number_of_words', '1') }}
	<br>
	{{ Form::label('add_number', 'Add a number') }}
	{{ Form::checkbox('add_number', '1', false) }}
	<br>
	{{ Form::label('add_symbol', 'Add a symbol') }}
	{{ Form::checkbox('add_symbol', '1', false) }}
	<br>
	{{ Form::label('caps_first_letter', 'Capitalize first letter') }}
	{{ Form::checkbox('caps_first_letter', '1', false) }}
	<br>
	
	{{ Form::submit('Generate!') }}
	
	{{ Form::close() }}
	<br>

<p class = "description"> Create passwords that are easy to remember but freakin hard to break!!!</p>

<a href='/'><img src='<?php echo URL::asset('/images/password_strength.png'); ?>' alt='explaining what xkcd passwords are'></a>
 
  @stop