<?php
    $dbhost = "localhost:3307";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sdi1900168";

    $db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // check if the connection was successful
    if ($db->connect_errno) {
        die("Failed to connect to database: " . $db->connect_error);
    }
    
?>