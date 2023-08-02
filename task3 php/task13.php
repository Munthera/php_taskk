<?php

function generateUniqueRandomNumbers($min, $max, $count) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}


$minRange = 11;
$maxRange = 20;
$count = 10;


$randomNumbers = generateUniqueRandomNumbers($minRange, $maxRange, $count);

echo implode(' ', $randomNumbers);
