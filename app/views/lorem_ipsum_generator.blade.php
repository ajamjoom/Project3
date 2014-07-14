@extends('_master')
 @section('title')
 		Lorem Ipsum Generator

 @stop

 @section('content')

 		 <a class='home' href = '/'>Home</a>
 		<h1>Lorem Ipsum Generator</h1>
 		<p class='lorem_Q'>How many paragraphs do you want?</p>
 		

{{ Form::open(array('url' => '/lorem_ipsum_generator', 'method' => 'POST')) }}
	
	{{ Form::label('num_of_parag', 'Number of Paragraphs:') }}
	{{ Form::text('num_of_parag', '1') }}
	{{ Form::submit('Generate!') }}

{{ Form::close() }}


<br>

<?php

if(isset($_POST["num_of_parag"])) {
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($_POST["num_of_parag"]);
echo implode("<p>", $paragraphs);
}

?>
 		@stop