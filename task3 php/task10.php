<?php

function convertToLowercase($array) {
    $lowercaseArray = array();

    foreach ($array as $value) {
        $lowercaseArray[] = strtolower($value);
    }

    return $lowercaseArray;
}


$colors = array("RED", "BLUE", "WHITE", "YELLOW");


$lowercaseColors = convertToLowercase($colors);


print_r($lowercaseColors);
