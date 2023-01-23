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

    <div class="container" style="position: relative; width:100%; margin-top:-1%;">
        <div class="card" style="border-width: 2px; width:110%;">
            <h4 style="margin-left: 40%;">Εγκεκριμένες αιτήσεις</h4>
        </div>
    </div>

</div>

    <div class="container" style="position: relative; width:110%; margin-top:1%;">
        <div class="card" style="border-width: 2px; width: 110%; height: 100%;  margin-bottom:1%;background-color: transparent;border:none;">
            <jobs style="width: 110%;">

        <!-- php to get saved applications -->
        <?php 
            $sql = "SELECT * FROM application WHERE student_id = ".$_SESSION['user']['id']." AND status = 'Εγκεκριμένη';";
            //send query to database
            $result = mysqli_query($db, $sql);
            /* check if we have results */
            $result_rows = mysqli_num_rows($result);
            if($result_rows > 0){
            /* print data to html */
        ?>
            <ul class="joblist">
            <?php
            #for every application:
            while($row = mysqli_fetch_assoc($result)){
                #find corresponding ad.
                $sql_ad = "SELECT * FROM ads WHERE id = ".$row['ad_id'].";";
                $result_ad = mysqli_query($db, $sql_ad);
                $ad = mysqli_fetch_assoc($result_ad);
            ?>
            <li class="job">
                  <!-- individual job advertisment -->
                  <div class="job-card">
                    <!-- top line -->
                    <div class="top-line">
                        <!-- TITLE -->
                        <div class="zoom">
                            <form method="POST" action="../jobs/job-details.php">
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
                    <ul class="job-features" style="columns:1;">
                        <li><strong>Κατάσταση: </strong><p style="color: darkgreen;"><?php echo$row['status']?></p></li>
                        <li><strong><a href="<?php echo "../../uploads/".$row['grades'].""; ?>">Αναλυτική βαθμολογία</strong></a></li>
                        <li><strong>Σχόλια: <br> <p></strong><?php echo $row['comments'];?></p></li>
                        <li><strong>Ημερομηνία υποβολής:</strong> <?php echo $row['date']; ?> </li>
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