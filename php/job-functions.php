<?php 
    session_start();

    /* if user is logged in */
    if(isset($_SESSION['user'])){
        /* if user is company continue else redirect to index */
        if($_SESSION['user']['role'] == 'company'){
            $company_id = $_SESSION['user']['id'];
        }
        else{
            header("location: ../index.php");
        }
    }
    else{
        header("location: ../index.php");
    }

    /* id of application */
    $ap_id = $_GET['ap-id'];
    /* id of student */
    $sid = $_GET['sid'];
    /* id of ad */
    $ad_id = $_GET['ad-id'];
    /* status */
    $status = $_GET['status'];
    
    require_once "connection.php";
    
    /* get ad */
    $query = "SELECT * FROM ads WHERE published = 1 AND id='$ad_id' " ;
    $sql = mysqli_query($db, $query);
    $ad = mysqli_fetch_array($sql, MYSQLI_ASSOC);

    /* get student */
    $query2 = "SELECT * FROM students WHERE id='$sid' " ;
    $sql2 = mysqli_query($db, $query2);
    $student = mysqli_fetch_array($sql2, MYSQLI_ASSOC);

    /* get student application */
    $query3 = "SELECT * FROM application WHERE application_id='$ap_id' " ;
    $sql3 = mysqli_query($db, $query3);
    $application = mysqli_fetch_array($sql3, MYSQLI_ASSOC);

    var_dump($ad['title'], $student['fname'], $application['application_id'], $status);

    /* update application status to "Εγκεκριμένη" or "Απορριφθείσα" */

    /*send notification to student */
    $false = 0;
    $sql = "INSERT INTO notifications (student_id, application_id, is_read) VALUES('$sid', '$ap_id', $false)";
    $db->query($sql);
    
    $sql = "UPDATE application SET status='$status' WHERE application_id='$ap_id' ";
    if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
        //header("location: jobs-approved.php");
    }
    else {
        echo "Error updating record: " . $db->error;
        header("location: ../index.php");
    }

    /* if it is rejected redirect to rejected */
    if($status == 'Απορριφθείσα'){
        header("location: jobs-rejected.php");
    }
    else{
        /* if it is approved ad should have one less position available so we update ad positions */
        $pos = $ad['positions'];
        $pos = $pos-1;
        $sql = "UPDATE ads SET positions='$pos' WHERE id='$ad_id' ";
        if ($db->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("location: jobs-approved.php");
        }
        else {
            echo "Error updating record: " . $db->error;
            header("location: ../index.php");
        }
    }
?>