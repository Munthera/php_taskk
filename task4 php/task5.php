<?php

function generate_pattern() {
    $pattern = "";
    $rows = 5;

    for ($i = 1; $i <= $rows; $i++) {
        $pattern .= $i . "";
        for ($j = 0; $j < 5; $j++) {
            $pattern .= "0";
        }
        $pattern .= "<br>";
    }

    return $pattern;
}
echo generate_pattern();


?>
