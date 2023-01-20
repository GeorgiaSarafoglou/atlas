<?php include "connection.php"; ?>



<?php

if(isset($_POST['delete-application'])){

    $id = $_POST['application-id'];

    $sql = "DELETE FROM application WHERE application_id = '$id' ";

    $execute_query = mysqli_query($db, $sql);

    if($execute_query){
        echo '<script> window.location = "my-applications.php"; </script>';
    }
}


?>