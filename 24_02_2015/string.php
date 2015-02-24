<?php

 	$name = "Al- Imran Ahmed";

 	//To get the length of the string
 	$length = strlen($name);
 	echo "The string is ".$name."<br>";
 	echo "The length of the string is ".$length."<br>";

 	//Count the word of string
	$numberOfWord = str_word_count($name);
	echo "The number of word is: ".$numberOfWord."<br>";

	//Reversing the string
	$reverseString = strrev($name);
	echo "The reverse string is: ".$reverseString."<br>";


	//Replacing word on a string
	$newString = str_replace("Ahmed", "Shikdar", $name);
	echo "The new string after replacing: ".$newString."<br>";


	//Searching a string
	$position = strpos($name, "Ahmed");
	echo "The position of Ahmed in string is: ".$position."<br>";

?>

	<!-- Reference of String -->

	<a href="http://www.w3schools.com/php/php_ref_string.asp" target="_blank">Reference of String</a>