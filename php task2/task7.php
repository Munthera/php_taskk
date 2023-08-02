<?php
function password_generate($chars){
$str1 ='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
return substr(str_shuffle($str1), 0, $chars);
}
echo password_generate(7)."\n";
?>

