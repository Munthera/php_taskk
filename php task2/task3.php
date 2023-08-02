
<?php
$text1 = 'I am a full stack developer at orange coding academy';
$text2 ='Orange';
$position = strpos(strtolower($text1),strtolower($text2));

 if ($position !== false){
 echo 'Word Found';
 }
 else{
 echo 'Word Not Found';
}
?>




