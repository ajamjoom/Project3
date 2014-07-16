<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	
	return View::make('index');

});

Route::get('/lorem_ipsum_generator', function()
{

	return View::make('lorem_ipsum_generator');

});

Route::post('/lorem_ipsum_generator', function()
{
	$paragraph='';
	if(isset($_POST["num_of_parag"])) {
		
		if($_POST["num_of_parag"]<=99 && $_POST["num_of_parag"]>=1){
			
			$generator = new Badcow\LoremIpsum\Generator();
			$paragraphs = $generator->getParagraphs($_POST["num_of_parag"]);
			$paragraph = implode("<p>", $paragraphs);
		
		}
		
		else{
			echo "((Please enter a number between 1-99))";
		
		}
	}
	
	return View::make('lorem_ipsum_generator')->with ('data', $paragraph);

});

Route::get('/user_generator', function()
{

	return View::make('user_generator');

});

Route::post('/user_generator', function()
{
	
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

	return View::make('user_generator');

});

Route::get('/password_generator', function()
{

	return View::make('password_generator');

});

Route::post('/password_generator', function()
{

$wordlist = file_get_contents('https://d1b10bmlvqabco.cloudfront.net/attach/ht1cmoh734q7lz/hwtu32ltlu3kx/hx6nwrvbr9fu/wordlist.txt');
//got this from a refernce example that had similar format to the file that I am scraping!!!
$words = preg_split("/[\s,]+/", $wordlist);
$password = '';

foreach($_POST as $value => $key){
	
	if( $value == "number_of_words"){

		for($i = 0; $i < $_POST[$value]; $i++){
			//if it's the first word then don't add a hyphen infront of it
			if($i == 0){

				$password .= $words[rand(0, 4999)];

		}
		//all words other than the first word(add hyphen before placing them)
		else{

			$password .= '-'.$words[rand(0, 4999)];

			}
		}
	}

	if($value == "add_number" && $key == "1"){

				$number = rand(1,1000);
				$password .= '-'.$number;
			
	}

	if($value == "add_symbol" && $key == "1"){

				$symbol = array('!', '@', '#', '$', '%', '^', '&', '*','~', '=', '+', '(', ')', '{', '}');
				$password .= '-'.$symbol[rand(0, 14)];
			
	}

	if($value == "caps_first_letter" && $key == "1"){

				$password = ucwords($password);
		
	}
}
	

	return View::make('password_generator')->with('data', $password);

});

