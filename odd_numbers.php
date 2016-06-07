<?php

function odd_numbers($input){
  $array = array_filter($input, "number");
  $oddNumber = array_filter($array, "odd");
  $win = sort($oddNumber);
  return $oddNumber;
}

//check if it's a number!
function number($n){
    if (is_int($n)){
      return true;
    } else {
      return false;
    }
}

// returns whether the integer is odd
function odd($var){
    if (abs($var % 2)){
      return true;
    } else {
      return false;
    }
}
?>
