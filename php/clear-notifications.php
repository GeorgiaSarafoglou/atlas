<?php include "connection.php"; ?>



<?php

if(isset($_POST['delete-notifications'])){

    
    $id = $_POST['student-id'];
    
    
    $sql = "DELETE FROM notifications WHERE student_id = '$id' ";

    $execute_query = mysqli_query($db, $sql);
    
    header("location: notifications.php");

}

?>