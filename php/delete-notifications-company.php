<?php include "connection.php"; ?>



<?php

if(isset($_POST['delete-notifications'])){

    
    $id = $_POST['company-id'];
    
    
    $sql = "DELETE FROM company_notifications WHERE company_id = '$id' ";

    $execute_query = mysqli_query($db, $sql);
    
    header("location: company-notifications.php");

}

?>