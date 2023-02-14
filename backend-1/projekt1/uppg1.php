<?php
print("<p>Servern snurrar på port " . $_SERVER['SERVER_PORT'] . ". Som vanligt med https och apache");
print("<p>Din ip address: ".$_SERVER['REMOTE_ADDR']);
print("<p>Serverns namn: ".$_SERVER['SERVER_NAME']);
print("<p>Serverns ip address: ".$_SERVER['SERVER_ADDR']);
print("<p>Apache version: ".apache_get_version());
?>