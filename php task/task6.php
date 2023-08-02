<?php 
$url = 'https://www.w3schools.com/php/default.asp.';
$url =parse_url($url);
//http
echo 'scheme :'.$url['scheme']. "<br>";
// www
echo 'Host :'.$url['host']. "<br>";
///index.html
echo 'Path :'.$url['path'] ."<br>";
?>
