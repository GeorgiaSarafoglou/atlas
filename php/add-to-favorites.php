<?php
    session_start();
    include "connection.php";
    /* add ad to table "favorites" */
    if (isset($_POST['addFavorite'])) {
        $id = $_SESSION['user']['id'];
        $sql = "INSERT INTO favorites(student_id, ad_id) VALUES('$id' , ".$_POST['ad-id'].")";
        $db->query($sql);
    }

    if(isset($_POST['removeFavorite'])){
        $id = $_SESSION['user']['id'];
        $sql = "DELETE FROM favorites WHERE student_id = '$id' AND ad_id = ".$_POST['ad-id']." ";
        $db->query($sql);
    }

    header("location: favorites.php");  
?>