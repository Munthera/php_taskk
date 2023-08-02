<?php

function generate_pattern() {
    $letters = "12345";

    for ($row = 0; $row < 5; $row++) {
        for ($col = 0; $col< 5 ; $col++) {
            if($col>=4 -$row){
                echo $letters[$row]." ";
            } else{
                echo "1"." ";
            }
        }
        echo "<br>";
    }
}

 generate_pattern();