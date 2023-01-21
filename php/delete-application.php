<?php include "connection.php"; ?>



<?php

if(isset($_POST['delete-application'])){

    
    $id = $_POST['application-id'];
    
    #get file name if it exists to delete it
    // $sql = "SELECT * FROM application WHERE application_id = '$id'";
    // $result = mysqli_query($db, $sql);
    // $row = mysqli_fetch_assoc($result);
    // if($row['grades'] != NULL){
    //     #delete grade file from uploads folder.
    //     // chown('../uploads/'.$row['grades'], 0777);
    //     // unlink('../uploads/'.$row['grades']);
    // }
    
    $sql = "DELETE FROM application WHERE application_id = '$id' ";

    $execute_query = mysqli_query($db, $sql);
    
    header("location: my-applications.php");


}

?>