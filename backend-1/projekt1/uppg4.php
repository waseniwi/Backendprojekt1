<?php 
if(!empty($_REQUEST["name"]) && isset($_REQUEST["email"])){

    $skadligdata = $_REQUEST["name"];
    $ofarligdata = test_input($skadligdata);
    $email = test_input($_REQUEST["email"]);
    print "Welcome " . $ofarligdata; 
    print "<br>Your email address is: " . $_REQUEST["email"]; 

    
    mail($email,"Your password for WikApp", rand());
    print("<br>Signing up as " . $ofarligdata . "... check your email for your password<br>");

    $_SESSION['username'] = $ofarligdata;
    
    header("refresh:5; url=index.php");
    echo "You will be redirected in 5 seconds";
}

?>