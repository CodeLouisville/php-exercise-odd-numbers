<?php

function odd_numbers($array){
  sort($array);
  $output=[];

  foreach($array as $value){
    if ($value > 0){
     if (($value % 2)==1){
     $output[]=$value;
    }
   }
  }return $output;
}
?>
