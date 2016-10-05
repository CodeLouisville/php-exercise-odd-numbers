<?php
  function odd_numbers($array){
   $result = array();
   foreach ($array as $value){
	if ((is_int($value)) && ($value % 2 !=0)){
       $result[] = $value;
     }
   }
   sort($result);
   return $result;
 }
 
 $array = [3, 2, 1];
 var_dump(odd_numbers($array));
 
 ?>