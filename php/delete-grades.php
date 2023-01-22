<?php 

    session_start();
    include "connection.php";
    /* add application to db with STATUS = SAVED */
    $id = $_POST['application-id'];
    $comments = $_POST['comments'];
    #make grades in application NULL
    if(isset($_POST['delete-grade-file'])){
        $sql = "UPDATE application SET grades = NULL WHERE application_id = $id ";
        $db->query($sql);
    }

    header("location:my-applications.php");

?>