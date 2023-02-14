<?php

if(isset($_SESSION['username']) && isset($_REQUEST["comment"])){
    $name = $_SESSION['username'];
    $comment = test_input($_REQUEST["comment"]);

    $myfile = fopen("comments.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $name.", ".date("j.n.Y, H:i:s").": ".$comment."\n");
    fclose($myfile);
    header("refresh:0.1;url=index.php");
    print("<br>");
}
$comments = file("comments.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach(array_reverse($comments) as $kommentarer){
        print("<br>".$kommentarer."<br>");
    }
?>