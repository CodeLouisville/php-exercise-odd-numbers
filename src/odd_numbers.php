 <?php
  
 function odd_numbers($array) {
 function odd_numbers(array $arrayInput) {
      $odd = array();
  
     if (isset($array) && is_array($array)) {
         foreach ($array as $value) {
             if ($value % 2 !== 0) {
     if (isset($arrayInput) && is_array($arrayInput)) {
         foreach ($arrayInput as $value) {
             if ($value % 2 !== 0 && is_int($value) === true) {
                  $odd[] = $value;
              }
          }        