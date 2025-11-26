<?php

# Sum of 2 Digit Numbers without + operator.

function sumwithoutPlus(int $a, int $b){
	      while ($b != 0) 
	      {
					$carry = $a & $b;
					$a = $a ^ $b;
					$b = $carry << 1;
    		} 
  		return $a;
}

echo sumwithoutPlus(5,2);