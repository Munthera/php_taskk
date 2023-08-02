<?php

function generate_floyd_triangle($n) {
    $num = 1;

    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}


$n = 5;

generate_floyd_triangle($n);

?>

