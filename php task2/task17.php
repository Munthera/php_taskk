<?php

$number_format ='\"\1+2/3*2:2-3/4*3';
 echo str_replace(str_split('\\/:*?"<>|+-'),' ',$number_format)."\n";
 ?>