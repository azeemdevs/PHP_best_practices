<?php
# Find the largest number in an array

$array = [2,1,4,10,100,2,3,4,200];
$largest = 0;
for($i=0; $i < count($array); $i++){
   if($largest < $array[$i]){
      $largest = $array[$i];
   }
}

echo "The Largest Number from an Array is : ${largest}";