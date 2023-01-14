<?php
    $dbhost = "localhost:3307";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sdi1900168";

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
        die("Failed to connect to database !");
    }
?>