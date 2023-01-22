<!DOCTYPE html>
<html lang="en">

<?php include "includes.php"; 
    session_start();
    include "connection.php";
    include "office-menu.php";
    include "includes.php";
?> 


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


<!-- delet enotifications button -->
<div class="container">
<form action="delete-notifications-company.php" method="POST">
    <input type="hidden" name="company-id" value = "<?php echo $_SESSION['user']['id']?>">
    <button class="form-control-submit-button" type="submit" name="delete-notifications" style="margin-left:8%; width: 20%; height: 5%;">Καθαρισμός ειδοποιήσεων</button>
</form>

    <div class="main-box" style="background-color: transparent;">
    <!-- get data -->
    <?php 
    #get notifications
    $sql = "SELECT * FROM company_notifications WHERE company_id = " . $_SESSION['user']['id'] . " ";
    $result = mysqli_query($db, $sql);
    $num_rows = mysqli_num_rows($result);

    if($num_rows > 0){
        /* print data to html */ ?>
        <jobs>
            <ul class="joblist">
<?php        while($row = mysqli_fetch_assoc($result)){
            #mark notifications as read.
            $new_not = "UPDATE company_notifications SET is_read = 1 WHERE id = " . $row['id'] . " ";
            $db->query($new_not);
                ?>

                    <?php 
                        #find corresponding application and add.
                        $sql_app = "SELECT * FROM application WHERE application_id = ".$row['application_id'].";";
                        $result_app = mysqli_query($db, $sql_app);
                        $app = mysqli_fetch_assoc($result_app);

                        $sql_ad = "SELECT * FROM ads WHERE id = ".$app['ad_id'].";";
                        $result_ad = mysqli_query($db, $sql_ad);
                        $ad = mysqli_fetch_assoc($result_ad);

                        #get student that submited application
                        $sql_stud = "SELECT * FROM students WHERE id = ".$app['student_id'].";";
                        $result_stud = mysqli_query($db, $sql_stud);
                        $stud = mysqli_fetch_assoc($result_stud);
                        ?>
<li class="job">
                  <!-- individual job advertisment -->
                  <div class="job-card">
                    <!-- top line -->
                    <div class="top-line">
                        <!-- TITLE -->
                        <div class="zoom">
                            <form method="POST" action="job-details.php">
                                <input type="hidden" name="show-submit-application" value=0>
                                <input type="hidden" name="ad-id" value="<?php echo $ad['id']; ?>">
                                <h3><button type="submit" name="show-details" class="job-title-button"> <?php echo $ad['title']?> </button></h3>
                            </form>
                        </div>
                        <!-- END OF TITLE -->
                    </div> 
                    <!-- end of top line -->

                    <!-- job and application information -->
                    <p><?php echo $ad['subject']?></p>
                    <h5>Στοιχεία αιτούντα/ούσας</h5>
                    <ul class="job-features">
                        <li><strong>Όνομα:</strong><?php echo $stud['fname'];?></li>
                        <li><strong>Επώνυμο:</strong><?php echo $stud['lname'];?></li>
                        <li><strong>Ίδρυμα:</strong><?php echo $stud['university'];?></li>
                        <li><strong>Τμήμα:</strong><?php echo $stud['department'];?></li>
                    </ul>
                    <ul class="job-features" style="columns:1;">
                        <li><strong><a href="<?php echo "../uploads/".$app['grades'].""; ?>">Αναλυτική βαθμολογία</strong></a></li>
                        <li><strong>Σχόλια: <br> <p></strong><?php echo $app['comments'];?></p></li>
                        <li><strong>Ημερομηνία υποβολής αίτησης:</strong> <?php echo $app['date']; ?> </li>
                    </ul>
                    <!-- end of job and application information -->
                </div>
                <!-- end of individual job advertisement-->
            </li>  
            <!-- end of individual job application -->

        <!-- end of while -->
        <?php } ?>
            
        </ul>
    </jobs>
</div>
<!-- end of if $result rows > 0 -->
<?php } ?>


</div>
</div>
    <!-- end of main container -->
</header>
</body>
</html>