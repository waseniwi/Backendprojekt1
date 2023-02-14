<?php
session_start();
//allt möjligt viktigt som vi använder ofta, sessionshantering, form validation osv.
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//$safe_input = test_input($_REQUEST["unsafedata"])
    ?>