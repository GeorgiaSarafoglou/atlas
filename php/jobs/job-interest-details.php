<?php 
    session_start();

    /* if user is logged in */
    if(isset($_SESSION['user'])){
        /* if user is company continue else redirect to index */
        if($_SESSION['user']['role'] == 'company'){
            $company_id = $_SESSION['user']['id'];
        }
        else{
            header("location: ../../index.php");
        }
    }
    else{
        header("location: ../../index.php");
    }

    /* id of application */
    $ap_id = $_GET['ap-id'];
    /* id of student */
    $sid = $_GET['student-id'];
    /* id of ad */
    $ad_id = $_GET['ad-id'];
    
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../includes.php" ?>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <?php include "../office-menu.php" ?>
            <div class="container" style="position: relative; width:100%; margin-top:-1%;">
                <div class="card" style="border-width: 2px; width:110%;">
                    <h4 style="margin-left: 40%;">Αιτήσεις Αγγελίας</h4>
                </div>
            </div>
            
            <div class="container" style="position: relative; width:110%; margin-top:1%;">
                <div class="card" style="border-width: 2px; width: 110%; height: 100%;  margin-bottom:1%;">
                    <div style="margin: 2%; margin-top:1%;">
                        <div class="top-line">
                            <div>
                                <h5><?php echo $ad['title'];?></h5><br>
                                <h6><?php echo $ad['subject']; ?></h6>
                            </div>
                            <?php 
                                if($application['status'] != "Εγκεκριμένη" && $application['status'] != "Απορριφθείσα"){
                            ?>
                                <button id="accept" name="accept-btn" type="submit" class="accept-button"
                                    style="height: 30%; margin-left: 70%;">
                                    <?php $status = "Εγκεκριμένη"; ?>
                                    <a href="job-functions.php?ad-id=<?php echo $ad['id'] ?>&sid=<?php echo $student['id'] ?>&ap-id=<?php echo $application['application_id'] ?>&status=<?php echo $status; ?>">
                                        Αποδοχή <span><i class="icon-check-sign"></i></span>
                                    </a>
                                </button>

                                <button id="reject" name="reject-btn" type="submit" class="reject-button"
                                    style="height: 30%; margin-right: 3%;">
                                    <?php $status = "Απορριφθείσα"; ?>
                                    <a href="job-rejection-func.php?ad-id=<?php echo $ad['id'] ?>&sid=<?php echo $student['id'] ?>&ap-id=<?php echo $application['application_id'] ?>&status=<?php echo $status; ?>">
                                        Απόρριψη <span><i class="icon-check-sign"></i></span>
                                    </a>
                                </button>
                            <?php } ?>
                            
                        </div>
                        <div class="line"></div>
                        <p><h6><?php echo "Όνομα αιτούντα/ούσας : "; ?></h6><?php echo $student['fname']." ".$student['lname'] ;?></p>
                        <p><h6><?php echo "Τμήμα : "; ?></h6><?php echo $student['department'];?></p>
                        <h6><?php echo "Σχόλια : "; ?></h6>
                        <?php echo $application['comments'];?><br><br>
                        <a href="<?php echo "../../uploads/".$application['grades'].""; ?>">Αναλυτική βαθμολογία</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>