<?php

function odd_numbers($array) {
    $odd = array();

    if (isset($array) && is_array($array)) {
        foreach ($array as $value) {
            if ($value % 2 !== 0) {
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
