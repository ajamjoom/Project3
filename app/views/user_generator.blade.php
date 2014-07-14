@extends('_master')
 @section('title')

 			Random User Generator
 @stop

 @section('content')

 		<a class='home' href = '/'> <-home</a>

 		<h1>Random User Generator</h1>


<dev class='form'>
	{{ Form::open(array('url' => '/user_generator', 'method' => 'POST')) }}
	
	{{ Form::label('number_of_users', 'Number of users:', array('id' => 'user_generator')) }}
	{{ Form::text('number_of_users', '1') }}
	<br>
	{{ Form::label('add_birthday', 'Include birthday') }}
	{{ Form::checkbox('add_birthday', '1', true) }}
	<br>
	{{ Form::label('add_address', 'Include address') }}
	{{ Form::checkbox('add_address', '1', true) }}
	<br>
	{{ Form::label('add_profile', 'Include profile') }}
	{{ Form::checkbox('add_profile', '1', true) }}
	<br>
	
	{{ Form::submit('Generate!') }}
	
	{{ Form::close() }}
	
</dev>

<?php 
$faker = Faker\Factory::create();

if(isset($_POST["number_of_users"])) {
	
	
	for ($i=0; $i < $_POST["number_of_users"]; $i++) { 
		
		echo "<br />";
		
		echo "<img src='http://lorempixel.com/400/200/business' alt='users personal photo' width= '200' height= '100' >";
 		echo "<br />";
		echo "<h4>".$faker->name."</h4>";

		if (isset($_POST["add_birthday"])) {
			echo $faker->dateTimeThisCentury->format('Y-m-d'). "<br />";
		}

		if (isset($_POST["add_address"] )) {
			echo $faker->address. "<br />";
		}

		if (isset($_POST["add_profile"] )) {
			echo $faker->text;
		}
		
		echo "<br />";
		echo "<hr />";
	
	}
}

?>

 @stop