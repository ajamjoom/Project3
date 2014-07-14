@extends('_master')
 @section('title')
 		Lorem Ipsum Generator

 @stop

 @section('content')

 		 <a class='home' href = '/'> <-home</a>
 		<h1>Lorem Ipsum Generator</h1>
 		<p class='lorem_Q'>How many paragraphs do you want?</p>
 		
<dev class='form'>

{{ Form::open(array('url' => '/lorem_ipsum_generator', 'method' => 'POST')) }}
	
	{{ Form::label('num_of_parag', 'Number of Paragraphs:', array('id' => 'num_of_parag')) }}
	{{ Form::text('num_of_parag', '1') }}
	{{ Form::submit('Generate!') }}

{{ Form::close() }}

</dev>
<br>
<?php
if(isset($_POST["num_of_parag"])) {
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($_POST["num_of_parag"]);
echo implode("<p>", $paragraphs);
}
?>
 		@stop