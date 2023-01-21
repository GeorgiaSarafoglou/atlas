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
    /* get status */
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
            <div class="container" style="position: relative; width:110%; margin-top:1%;">
                <div class="card" style="border-width: 2px; width: 110%; height: 100%;  margin-bottom:1%;">
                    <div style="margin: 2%; margin-top:1%;">
                        <div class="top-line">
                            <div>
                                <h5><?php echo $ad['title'];?></h5><br>
                                <h6><?php echo $ad['subject']; ?></h6>
                            </div>
                        </div>

                        <div class="line"></div>
                        
                        <p><h6><?php echo "Όνομα αιτούντα/ούσας : "; ?></h6><?php echo $student['fname']." ".$student['lname'] ;?></p>
                        <p><h6><?php echo "Τμήμα : "; ?></h6><?php echo $student['department'];?></p>
                        <h6><?php echo "Σχόλια : "; ?></h6>
                        <?php echo $application['comments'];?><br><br>
                        <a href="<?php echo "../uploads/".$application['grades'].""; ?>">Αναλυτική βαθμολογία</strong></a>
                    </div>
                </div>
            </div>
            <div class="container" style="position: relative; width:110%; margin-top:1%;">
                <div class="card" style="border-width: 2px; width: 110%; height: 100%;  margin-bottom:1%;">
                    <form class="form-group" id="rejection-gorm" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;" method="POST">
                        <div class="row">
                            <div class="form-group" style="width: 100%; right:60%; ">
                                <textarea class="form-control-textarea notEmpty" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' id="reason" style="width: 195%;" name="reason"></textarea>
                                <label class="label-control" for="reason"> Λόγοι Απόρριψης Αίτησης </label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:150%; margin-top: 13%;">
                                    <a href="../index.php" class="turquoise" style="margin-bottom: 2%; margin-top: 8%; height: 40%; width: 60%;"> Επιστροφή στην Αρχική </a>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left: 70%;">
                                    <button id="reject" name="reject_btn" type="submit" class="reject-button"  style="margin-bottom: 2%; margin-top: 8%; width: 60%; left: 60%; height:40%">Απόρριψη Αγγελίας</button>
                                </div>
                            </div> <!-- end of col -->
                        </div>

                    </form>
                </div>
            </div>

            <?php
                if(isset($_POST['reject_btn'])){
                    
                    if(!empty($_POST['reason'])){
                        $reason = $_POST['reason'];

                        $sql = "UPDATE application SET 
                                status = '$status',
                                rejection_reason = '$reason'
                            WHERE application_id = '$ap_id' ";

                        $query_run = mysqli_query($db, $sql);
                        if($query_run){
                            echo '<script type="text/javascript">window.location = "http://localhost/sdi1900168/atlas/php/jobs-rejected.php"</script>';
                        }
                    }
                    else{
                        header("location: jobs-rejected.php");
                    }
                }
            ?>

        </div>    
    </header>
</body>