<?php

# Given an Array of numbers print only even and then odd numbers

$array = [2,3,4,1,2,3,44,57,23,24,55,10,20,32,43,67,76,83];

$even  = [];
$odd = [];
foreach ($array as $value) {
	// For Even
	if ($value % 2 == 0){
       $even[] = $value;
	}else
	// for odd
	{
       $odd[]  = $value;
	}
}

echo "Even Numbers are : "  . implode('|', $even) . "<br>";
echo "Odd Numbers are :" . implode('|', $odd);