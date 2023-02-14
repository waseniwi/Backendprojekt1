<?php

$myfile = fopen("besok.txt", "a") or die("Unable to open file!");
$ip = $_SERVER['REMOTE_ADDR'];
fwrite($myfile, $ip.", ".date("j.n.Y, H:i:s")."\n");
fclose($myfile);
print("Ditt besök har loggats!");

$count_page = ("antalbesok.txt");
$hits = file($count_page);
$hits[0] ++;
 
$fp = fopen($count_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
print("<br>Totalt antal besök: " . $hits[0]);
?>