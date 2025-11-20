<?php

# Check if a given string is palindrome or not
# Palindrome is a word that can read in straight ot backward is same. i.e, Madam, racecar etc...
function Palindrome($str){
	$cleanedString = preg_replace("/[^a-zA-Z0-9]/",'', strtolower($str));
return $cleanedString === strrev($cleanedString);
}


echo Palindrome("racecar");