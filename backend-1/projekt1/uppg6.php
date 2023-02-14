<?php
    if(isset($_SESSION['username'])){

function scan_dir($dir) { //stackoverflow
    $ignored = array('.', '..', '.svn', '.htaccess'); 
    $files = array(); 
    foreach (scandir($dir) as $file) {
        if ($file[0] === '.') continue; 
        if (in_array($file, $ignored)) continue; 
        $files[$file] = filemtime($dir . '/' . $file); 
    }
    arsort($files); 
    $files = array_keys($files); 
    return ($files) ? $files : false;
}

    $katalog = "../pictures/";
    $bilder = scan_dir($katalog, 1);
    //print_r($bilder);
    print($_SESSION['username']);
    print("<img src='../pictures/" . $bilder[0] . "' alt=profilbild height=300/><br>");
    foreach(array_slice($bilder, 1) as $i){
        print("<img src='../pictures/".($i)."' alt=tidigare profilbild height=50/>");
    }
    }
    else{
        header("refresh:5;url=./index.php");
        print("Du är inte inloggad. Returnerar till hemsidan om 5 sekunder");
    }
?>