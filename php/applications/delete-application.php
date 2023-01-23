<?php include "../connection.php"; 

if(isset($_POST['delete-application'])){
    
    $id = $_POST['application-id'];

    #get application
    $sql_app = "SELECT * FROM application WHERE application_id = '$id';";
    $result_app = mysqli_query($db, $sql_app);
    $app = mysqli_fetch_assoc($result_app);
    
    #get ad id
    $sql_ad = "SELECT * FROM ads WHERE id = ".$app['ad_id'].";";
    $result_ad = mysqli_query($db, $sql_ad);
    $ad = mysqli_fetch_assoc($result_ad);


    #get get company id
    $company_id = $ad['company_id'];

    $sql = "DELETE FROM company_notifications WHERE application_id = '$id' AND company_id = '$company_id' ";
    $execute_query = mysqli_query($db, $sql);
    
    $sql = "DELETE FROM application WHERE application_id = '$id' ";
    $execute_query = mysqli_query($db, $sql);
    
    header("location: http://localhost/sdi1900168/atlas/php/applications/my-applications.php");
}

?>