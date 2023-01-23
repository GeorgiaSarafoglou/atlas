<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    include "../connection.php";
    include "../student-menu.php";
    include "../includes.php";
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
<form action="clear-notifications.php" method="POST">
    <input type="hidden" name="student-id" value = "<?php echo $_SESSION['user']['id']?>">
    <button class="form-control-submit-button" type="submit" name="delete-notifications" style="margin-left:8%; width: 20%; height: 5%;"">Καθαρισμός ειδοποιήσεων</button>
</form>

    <div class="main-box" style="background-color: transparent;">
    <!-- get data -->
    <?php 
    #get notifications
    $sql = "SELECT * FROM notifications WHERE student_id = " . $_SESSION['user']['id'] . " ";
    $result = mysqli_query($db, $sql);
    $num_rows = mysqli_num_rows($result);

    if($num_rows > 0){
        /* print data to html */ ?>
        <jobs>
            <ul class="joblist">
<?php        while($row = mysqli_fetch_assoc($result)){
            $new_not = "UPDATE notifications SET is_read = 1 WHERE id = " . $row['id'] . " ";
            $db->query($new_not);
                ?>

                    <?php 
                        #find corresponding application and add.
                        $sql_app = "SELECT * FROM application WHERE application_id = ".$row['application_id'].";";
                        $result_app = mysqli_query($db, $sql_app);
                        $app = mysqli_fetch_assoc($result_app);
                        
                        $sql_ad = "SELECT * FROM ads WHERE id = ".$app['ad_id'].";";
                        $result_ad = mysqli_query($db, $sql_ad);
                        $ad = mysqli_fetch_assoc($result_ad)
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
                        <div style="order: 2;">
                            <?php if($app['status'] == "Εγκεκριμένη"){ ?>
                                <h5 style="color: darkgreen">Εγκρίθηκε</h5>
                            <?php }else{ ?>
                                <h5 style="color: crimson">Απορρίφθηκε</h5>

                            <?php } ?>
                        </div>
                    </div> 
                    <!-- end of top line -->

                    <!-- job and application information -->
                    <p><?php echo $ad['subject']?></p>
                    <ul class="job-features" style="columns:1;">
                        <li><strong><a href="<?php echo "../../uploads/".$app['grades'].""; ?>">Αναλυτική βαθμολογία</strong></a></li>
                        <li><strong>Σχόλια: <br> <p></strong><?php echo $app['comments'];?></p></li>
                        <?php if($app['status'] == "Απορριφθείσα"){ ?>
                            <li><strong>Λόγοι απόρριψης:</strong><br><p><?php echo $app['rejection_reason'];?></p></li>
                        <?php }?>
                        <li><strong>Ημερομηνία υποβολής:</strong> <?php echo $app['date']; ?> </li>
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