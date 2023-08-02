<?php

function generate_pattern() {
    $letters = "ABCDE";

    for ($row = 0; $row < 5; $row++) {
        for ($col = 0; $col< 5 ; $col++) {
            if($col>=4 -$row){
                echo $letters[$row]." ";
            } else{
                echo "A"." ";
            }
        }
        echo "<br>";
    }
}

 generate_pattern();


