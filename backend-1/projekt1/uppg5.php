<?php
if(!isset($_COOKIE["time"])) {
  $cookietime = date("j.n.Y, H.i");
  setcookie("time", $cookietime, time() + (86400), "/");
} else {
  if(isset($_SESSION["username"])) {
    print "Välkommen tillbaka " . $_SESSION["username"] ."! Ditt första besök var: " . $_COOKIE["time"];
  }
  else print "Välkommen tillbaka! Ditt första besök var: " . $_COOKIE["time"];
}
?>