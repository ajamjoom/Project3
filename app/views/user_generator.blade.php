@extends('_master')
 @section('title')

 			Random User Generator
 @stop

 @section('content')

 		<a class='home' href = '/'> <-home</a>

 		<h1>Random User Generator</h1>

<form action='user_generator.blade.php' method='POST'>

 	<p>
		<label for='number_of_parag'>Number of Paragraphs:</label>
 		<input type='number' name='number_of_parag' pattern="[0-9]" id='number_of-parag' > 
	</p>

	<input type='submit' value='Generate!'>		

</form>


 		@stop