<?php

function odd_numbers($array){
  sort($array);
  $output=[];

  foreach($array as $value){
    if ($value !=0 && is_int($value)){
     if (($value % 2)==1){
     $output[]=$value;
    }
   }
  }return $output;
}
?>
