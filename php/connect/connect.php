<?php
    $host = "localhost";
    $user = "kimyj6419";
    $pw = "alliswell6270!";
    $dbName = "kimyj6419";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect -> set_charset("utf8");
    if( mysqli_connect_errno()){
        echo "database connect false";
    } else {
        //echo "database connect true";
    }
    
?>