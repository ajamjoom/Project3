@extends('_master')
 @section('title')

 			Random User Generator
 @stop

 @section('content')

 		<a class='home' href = '/'>Home</a>

 		<h1>Random User Generator</h1>


	{{ Form::open(array('url' => '/user_generator', 'method' => 'POST')) }}
	
	
	{{ Form::label('number_of_users', 'Number of users:', array('id' => 'user_generator')) }}
	{{ Form::text('number_of_users', '1') }}
	{{ Form::label('number_of_users', '(Max 99)', array('id' => 'user_max')) }}
	<br>
	{{ Form::label('add_photo', 'Include photo') }}
	{{ Form::checkbox('add_photo', '1', false) }}
	<br>
	{{ Form::label('add_birthday', 'Include birthday') }}
	{{ Form::checkbox('add_birthday', '1', false) }}
	<br>
	{{ Form::label('add_address', 'Include address') }}
	{{ Form::checkbox('add_address', '1', false) }}
	<br>
	{{ Form::label('add_profile', 'Include profile') }}
	{{ Form::checkbox('add_profile', '1', false) }}
	<br>
	
	{{ Form::submit('Generate!') }}
	
	{{ Form::close() }}
	

<?php 
$faker = Faker\Factory::create();

if(isset($_POST["number_of_users"])) {
	
	if($_POST["number_of_users"]<=99 && $_POST["number_of_users"]>=1){
	for ($i=0; $i < $_POST["number_of_users"]; $i++) { 
		
		echo "<br />";
		
		if (isset($_POST["add_photo"])) {
			echo "<img src = '/images/".rand(1, 6).".jpg' alt='users personal photo' width = '150' height = '150' >";
		}

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
else{
	echo "please enter a number between 1-99";
}
}

?>

 @stop