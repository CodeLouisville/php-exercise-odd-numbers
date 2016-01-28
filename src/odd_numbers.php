<?php

function odd_numbers(array $arrayInput) {
    $odd = array();

    if (isset($arrayInput) && is_array($arrayInput)) {
        foreach ($arrayInput as $value) {
            if ($value % 2 !== 0 && is_int($value) === true) {
                $odd[] = $value;
            }
        }

        if (empty($odd)) {
            return $odd;
        } else {
            sort($odd);
            return $odd;
        }
    }
}
