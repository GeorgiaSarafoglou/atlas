<?php include "../connection.php"; 

if(isset($_POST['delete-job'])){

    $id = $_POST['ad-id'];
    
    $sql = "DELETE FROM ads WHERE id = '$id' ";

    $execute_query = mysqli_query($db, $sql);
    
    header("location: http://localhost/sdi1900168/atlas/php/jobs/watch-jobs-temp.php");
}

?>