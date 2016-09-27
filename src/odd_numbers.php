<?php

function odd_numbers(array $array) {
    $odd_array = array();
    
    foreach ($array as $num) {
        if (is_int($num) && $num !== 0 && $num % 2 !== 0) {
            $odd_array[] = $num;
        }
    }
    
    asort($odd_array);
    
    return $odd_array;
}
