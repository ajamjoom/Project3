<?php

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