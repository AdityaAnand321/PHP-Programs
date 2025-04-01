<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr; //Hello World!  remove the unwanted data 
echo "<br>";

$int = 100;
if($int, FILTER_VALIDATE_INT)

$url = "https://goo.com";

$url = filter_var()

?>