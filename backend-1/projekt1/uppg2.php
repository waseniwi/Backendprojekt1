<?php
print("Dagens datum: ".date("j.n.Y, H:i"));
$månad = array("-", "Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");
$veckodagar = array("-", "Måndag","Tisdag","Onsdag","Torsdag","Fredag","Lördag","Söndag");
print("<p>Idag är det: ".$veckodagar[date("N")]." den ".date("j")." ".$månad[date("n")]."</p>");
print("<p>Vi lever i vecka nummer: ".date("W"));
?>