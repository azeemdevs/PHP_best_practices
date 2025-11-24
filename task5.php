<?php
# remove duplicates from an array with or without built in function in with just use in _array method 
function removeDuplicates($array){
	$custom = [];
  for ($i=0; $i < count($array); $i++) { 
    $exists = [];         
    for ($j=0; $j < count($custom); $j++) { 
    	if ($array[$i] == $custom[$j]){
           $exists[] = $array[$i];
    	}
    }
    if(!$exists){
       $custom[] = $array[$i];
    }
  }
  return $custom;
}

echo "<pre>";
print_r(removeDuplicates([2,3,4,1,1,2,5,5,3,3,32,2,6,66,66]));
echo "</pre>";