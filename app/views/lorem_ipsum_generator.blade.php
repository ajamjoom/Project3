@extends('_master')
 @section('title')
 		Lorem Ipsum Generator

 @stop

 @section('content')

 		 <a class='home' href = '/'> <-home</a>
 		<h1>Lorem Ipsum Generator</h1>
 		<p>How many paragraphs do you want?</p>
 		
<form action='lorem_ipsum_generator.blade.php' method='POST'>

 	<p>
 		<label for='number_of_parag'>Number of Paragraphs:</label>

 		<input type='text' name='number_of_parag'  pattern="[0-9]" id='number_of-parag' > 
				
	</p>

	<input type='submit' value='Generate!'>		

</form>


 		@stop