<?php
$file ='www.orange.com/index.php';
$file_name =substr(strrchr($file,"/"),1);
echo $file_name;
?>