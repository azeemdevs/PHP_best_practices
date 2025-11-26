<?php

# Sum of Digits of Number 

function sumofdigits($number){
  
  $sum = 0;
  while ($number != 0) {
	$sum += $number % 10;
	$number = floor($number/10);
  }
  return $sum;
}

echo sumofdigits(201);