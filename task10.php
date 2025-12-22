<?php

# Find The Factorial of a number
# Factorial of a number Means multiplying that number by all whole numbers smaller than it down to 1.
# Exampe : 4! = 4x3x2x1

function factorial(int $number)
{
	$factorial = 1;
 for ($i = 2; $i <= $number; $i++){
     $factorial *= $i;
 }
 return $factorial;
}

echo factorial(4);