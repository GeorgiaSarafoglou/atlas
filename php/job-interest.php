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

    /* id of ad */
    $ad_id = $_GET['ad-id'];
    
    /* get table of ad */
    require_once "connection.php";

    $query = "SELECT * FROM ads WHERE published = 1 AND id='$ad_id' " ;
    $sql = mysqli_query($db, $query);
    /* we search the ad by id so there is no need for a while */
    $ad = mysqli_fetch_array($sql, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes.php" ?>
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

    <?php include "office-menu.php" ?>
            <div class="container" style="position: relative; width:100%; margin-top:-1%;">
                <div class="card" style="border-width: 2px; width:110%;">
                    <h4 style="margin-left: 40%;">Αιτήσεις Αγγελίας</h4>
                </div>
            </div>
            
            <div class="container" style="position: relative; width:110%; margin-top:1%;">
                <div class="card" style="border-width: 2px; width: 110%; height: 100%;  margin-bottom:1%;">
                    <jobs style="width: 110%;">
                        <!-- We need to get all applications for this ad -->
                        <?php 
                            $query = "SELECT * FROM application WHERE ad_id='$ad_id' AND status!='Μη-υποβεβλημένη' " ;
                            $sql = mysqli_query($db, $query);
                            while ($application = mysqli_fetch_array($sql, MYSQLI_ASSOC)){ 
                        ?>
                            <ul class="joblist">
                                <!-- Get the student that submitted this application -->
                                <?php
                                    $sid = $application['student_id'];
                                    $query2 = "SELECT * FROM students WHERE id='$sid' " ;
                                    $sql2 = mysqli_query($db, $query2);
                                    $student = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
                                ?>
                                <li class="job">
                                    <!-- individual application for ad -->
                                    <div class="job-card">
                                        <div class="top-line" style="height:100%">
                                            <div>
                                                <?php if(empty($application)){ echo "Δεν υπάρχουν αιτήσεις"; } ?>
                                                <h5><?php echo $ad['title'];?></h5><br>
                                                <h6><?php echo $ad['subject']; ?></h6>
                                            </div>
                                            <?php 
                                                if($application['status'] != "Εγκεκριμένη" && $application['status'] != "Απορριφθείσα"){
                                            ?>
                                                <button class="accept-button" style="height: 30%; margin-left: 69%;"> Αποδοχή </button>
                                                <button class="reject-button" style="height: 30%; margin-right: 3%;"> Απόρριψη </button>
                                            <?php 
                                                }
                                            ?>
                                        </div>
                                        <div class="line"></div>
                                        <ul class="job-features" style="height: 100%; columns: 1;">
                                            <li><strong>Όνομα Αιτούντα/ουσας:</strong> <?php if(!isset($student)){ echo "-";} else { echo $student['fname']; } ?></li>
                                            <li><strong>Τμήμα:</strong> <?php if(!isset($student)){ echo "-";} else { echo $student['department']; }?> </li>
                                            <li><strong>Περιγραφή:</strong> <?php if(!isset($application)){ echo "-";} else { echo $application['comments']; }?> </li>
                                        </ul>
                                        <div class="bottom">
                                            <a href="job-interest-details.php?ad-id=<?php echo $ad['id']?>&student-id=<?php echo $student['id']?>&ap-id=<?php echo $application['application_id']?>" >
                                                Λεπτομέρειες Αίτησης
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <?php } ?>
                    </jobs>
                </div>       
            </div>
        </div>
    </header>
</body>