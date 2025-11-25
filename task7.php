<?php

# Print the First 10 ten numbers of the Fibonacci Series 
# The Fibonacci Series is the sequence of numbers where every next number is sum of previous two numbers i.e., 0,1,1,2,3,5,8,13,21...

function fibonacciNumber($number){
	$a = 0; $b = 1;
	echo $a . "<br>" . $b  . "<br>";
	for($i = 2; $i < $number; $i++){
      $c = $a + $b;
      echo $c . "<br>";
      $a = $b;
      $b = $c;
	}
}


fibonacciNumber(10);