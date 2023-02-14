
<?php
if(!empty($_REQUEST["day"]) && !empty($_REQUEST["month"]) && !empty($_REQUEST["year"])){
    $day = test_input($_REQUEST["day"]);
    $month = test_input($_REQUEST["month"]);
    $year = test_input($_REQUEST["year"]);
    print("Du matade in datumet " . $day . "/" . $month . "/" . $year);

    $inmatadtid = date("l,M,Y", mktime(0,0,0, $month, $day, $year));
    print("<br>Inmatade datumet är: " . $inmatadtid);
    $tidemellan =(time()-(mktime(0,0,0, $month, $day, $year)));
    $s = $tidemellan%60;
    $m = floor(($tidemellan%3600)/60);
    $h = floor(($tidemellan%86400)/3600);
    $d = floor(($tidemellan%2592000)/86400);

    $s1 = abs($tidemellan)%60;
    $m1 = floor((abs($tidemellan)%3600)/60);
    $h1 = floor((abs($tidemellan)%86400)/3600);
    $d1 = floor((abs($tidemellan)%2592000)/86400);
    if($tidemellan < 0){
        print("<br>Det är ".(abs($tidemellan))." sekunder tills ditt datum<br>Alltså: ".$d1."d".$h1."h".$m1."m".$s1."s");
    }
    else{
        print("<br>Det är ".$tidemellan." sekunder sen ditt datum<br>Alltså: ".$d."d".$h."h".$m."m".$s."s");
    }
}?>