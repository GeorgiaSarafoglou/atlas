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

    /* get table of ad */
    require_once "../connection.php";
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

</div>
            <div class="container" style="position: relative; width:100%; margin-top:-1%;">
                <div class="card" style="border-width: 2px; width:110%;">
                    <h4 style="margin-left: 40%;">Εκκρεμείς Αιτήσεις</h4>
                </div>
            </div>
            
            <div class="container" style="position: relative; width:110%; margin-top:1%;">
                <div class="card" style="border-width: 2px; width: 110%; height: 100%;  margin-bottom:1%;background-color: transparent;border:none;">
                    <jobs style="width: 110%;">
                        <!-- We need to get all applications for this ad -->
                        <?php 
                            /* get all ads from company and for those ads get approved applications */
                            $status = "Εκκρεμής";
                            $query = "SELECT ads.*, application.*
                                    FROM ads
                                    JOIN application ON ads.id = application.ad_id
                                    WHERE ads.company_id = '$company_id' AND application.status = '$status' ";
                            $sql = mysqli_query($db, $query);
                            while ($ad = mysqli_fetch_array($sql, MYSQLI_ASSOC)){ 
                        ?>
                            <ul class="joblist">
                                <!-- Get the student that submitted this application -->
                                <?php
                                    $sid = $ad['student_id'];
                                    $query2 = "SELECT * FROM students WHERE id='$sid' " ;
                                    $sql2 = mysqli_query($db, $query2);
                                    $student = mysqli_fetch_array($sql2, MYSQLI_ASSOC);

                                    $ap_id = $ad['application_id'];
                                    $query3 = "SELECT * FROM application WHERE application_id='$ap_id' " ;
                                    $sql3 = mysqli_query($db, $query3);
                                    $application = mysqli_fetch_array($sql3, MYSQLI_ASSOC);
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
                                                <button id="accept" name="accept-btn" type="submit" class="accept-button"
                                                    style="height: 30%; margin-left: 65%;">
                                                    <?php $status = "Εγκεκριμένη"; ?>
                                                    <a href="job-functions.php?ad-id=<?php echo $ad['id'] ?>&sid=<?php echo $student['id'] ?>&ap-id=<?php echo $application['application_id'] ?>&status=<?php echo $status; ?>">
                                                        Αποδοχή <span><i class="icon-check-sign"></i></span>
                                                    </a>
                                                </button>
                                                <button id="reject" name="reject-btn" type="submit" class="reject-button"
                                                    style="height: 30%; margin-right: 30%;">
                                                    <?php $status = "Απορριφθείσα"; ?>
                                                    <a href="job-rejection-func.php?ad-id=<?php echo $ad['id'] ?>&sid=<?php echo $student['id'] ?>&ap-id=<?php echo $application['application_id'] ?>&status=<?php echo $status; ?>">
                                                        Απόρριψη <span><i class="icon-check-sign"></i></span>
                                                    </a>
                                                </button>
                                            <?php } ?>

                                        </div>

                                        <div class="line"></div>
                                        <ul class="job-features" style="height: 100%; columns: 1;">
                                            <li><strong>Όνομα Αιτούντα/ουσας:</strong> <?php if(!isset($student)){ echo "-";} else { ?> <?php echo $student['fname'] ;?> <?php  echo  $student['lname'] ; } ?></li>
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