<?php

$arr =array(1,2,3,4,5);
$location =3;
$newitem ='$';
array_splice($arr, $location, 0, $newitem);
 foreach ($arr as $item) {
    echo $item ."\n";
 }
 ?>