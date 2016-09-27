<?php

$array = array('a', 'b', '1');

function odd_numbers($array){
  $odd = array();
  foreach ($array as $key=>$value){
    if(!is_int($value)){
      continue;
    }
    if ($value % 2 !=0){
      $odd[] = $value;
    }
  }
  sort($odd);
  return $odd;
}

var_dump(odd_numbers($array));

?>
