<?php


function convertToUpperCase($array) {
    $upperCaseArray = array();

    foreach ($array as $value) {
        $upperCaseArray[] = strtoupper($value);
    }

    return $upperCaseArray;
}

$colors = array("red", "blue", "white", "yellow");

$upperCaseColors = convertToUpperCase($colors);

print_r($upperCaseColors);

?>