<?php
# Count occerence of given specific element in an array
$array = [2,1,1,3,6,2,2,2,3,3,4,4,7,7,7,8,8,9,3,2,2,2,2];

$element = 8;
$mostOccurred = 0;
for ($i = 0; $i < count($array); $i++ ){
   if ($element == $array[$i]){
       $mostOccurred++;
   }
}

echo "The Specific Repitative number is ${mostOccurred}";

