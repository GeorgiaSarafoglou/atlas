<?php include "../connection.php"; 

if(isset($_POST['delete-application'])){

    $id = $_POST['application-id'];
    
    $sql = "DELETE FROM application WHERE application_id = '$id' ";

    $execute_query = mysqli_query($db, $sql);
    
    header("location: http://localhost/sdi1900168/atlas/php/applications/my-applications.php");

}

?>