<?php
# Reverse The Given String
$string = "Apple";
$reverseString = "";
for($i = strlen($string) - 1; $i >= 0; $i--){
$reverseString .= $string[$i];
}
// echo strrev($string);

echo $reverseString;