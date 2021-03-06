@extends('_master')
 @section('title')
 		xkcd password generator
@section('head')
	<link rel='stylesheet' href='pass_style.css' type='text/css'>
@stop 
 @stop

 @section('content')
 

 <a class='home' href = '/'>Home</a>

<h1>xkcd Password Generator</h1>
<p class='password'>
<?php 

if (isset($data)) {

	echo $data;

}

?>
<p/>
	{{ Form::open(array('url' => '/password_generator', 'method' => 'POST')) }}
	
	{{ Form::label('number_of_words', 'Number of words:', array('id' => 'password_generator')) }}
	{{Form::select('number_of_words', array(
		
		'1' => '1',
		'2' => '2',
		'3' => '3',
		'4' => '4',
		'5' => '5',
		'6' => '6',
		'7' => '7',
		'8' => '8',
		'9' => '9',
		
		'10' => '10'
	), '1' ) }}
	
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