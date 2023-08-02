<?php

function findLowestNonZeroInteger($array) {
    $lowestNonZero = PHP_INT_MAX;

    foreach ($array as $value) {
        if ($value !== 0 && $value < $lowestNonZero) {
            $lowestNonZero = $value;
        }
    }

    return $lowestNonZero;
}


$array1 = array(2, 0, 10, 12, 6);

$lowestNonZeroInteger = findLowestNonZeroInteger($array1);


echo $lowestNonZeroInteger;
