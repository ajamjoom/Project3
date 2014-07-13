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
	{{ Form::label('add_address', 'Include address') }}
	{{ Form::checkbox('add_address', '1', true) }}
	<br>
	{{ Form::label('add_profile', 'Include profile') }}
	{{ Form::checkbox('add_profile', '1', true) }}
	<br>
	<!--
	{{ Form::label('add_photo', 'Include photo') }}
	{{ Form::checkbox('add_photo', '1', true) }}
	-->
	<br>
	{{ Form::submit('Generate!') }}
	
	{{ Form::close() }}
</dev>

<?php 

$faker = Faker\Factory::create();

if(isset($_POST["number_of_users"])) {
	
	for ($i=0; $i < $_POST["number_of_users"]; $i++) { 
		
		echo $faker->name. "<br />";

		//if ($_POST["add_photo"] == true) {
		//	echo $faker->image($dir = '/tmp', $width = 640, $height = 480);
		//}

		if ($_POST["add_address"] == true) {
			echo $faker->address;
		}
		if ($_POST["add_profile"] == true) {
			echo $faker->text;
		}
		

	}
}

?>


 		@stop