<?php
function odd_numbers(array $input)
{
    $odd = [];
    foreach ($input as $number) {
        if ($number & 1 && is_int($number)) {
            $odd[] = $number;
        }
    }
    if (count($odd) > 1){
    sort($odd);
}
    return $odd;
}
 ?>
