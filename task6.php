<?php

# Print Fizz when the number is divisible by 3 and Print
# Buzz when the number is divisible by 5 and print FizzBuzz when the number is divisible by bith 3 and 5 otherwise print only the number;

for ($i = 1; $i <= 100; $i++){
  if ($i % 15 == 0) echo "FizzBuzz" . "<br>";
  elseif ($i % 3 == 0) echo "Fizz" . "<br>";
  elseif ($i % 5 == 0) echo "Buzz" . "<br>";
  else echo "$i" . "<br>";
}