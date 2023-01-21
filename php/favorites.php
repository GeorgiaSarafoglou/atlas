<!DOCTYPE html>
<html lang="en">

<?php include "includes.php"; 
    session_start();
    include "connection.php";
    include "student-menu.php";
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


    <div class="container">
    <div class="main-box" style="background-color: transparent;">
    <!-- get data -->
    <?php
    $sql = "SELECT * FROM favorites WHERE student_id = ".$_SESSION['user']['id'].";";
    //send query to database
    $result = mysqli_query($db, $sql);
    /* check if we have results */
    $result_rows = mysqli_num_rows($result);
    if ($result_rows > 0) {
        /* print data to html */?>
        <jobs>
            <ul class="joblist">
    <?php while ($row = mysqli_fetch_assoc($result)) {
        #get corresponding job
        $sql_ad = "SELECT * FROM ads WHERE id = ".$row['ad_id'].";";
        $result_ad = mysqli_query($db, $sql_ad);
        $ad = mysqli_fetch_assoc($result_ad);
        ?>     
                <li class="job">
                    <!-- individual job advertisment -->
                    <div class="job-card">
                        <div class="top-line">
                            <div class="zoom">
                                <form method="POST" action="job-details.php">
                                <input type="hidden" name="show-submit-application" value=1>
                                    <input type="hidden" name="ad-id" value="<?php echo $ad['id']; ?>">
                                    <h3><button type="submit" name="show-details" class="job-title-button"> <?php echo $ad['title']?> </button></h3>
                                </form>
                            </div>
                        </div> 
                        <p><?php echo $ad['departments']?></p>
                        <ul class="job-features">
                            <li><strong>Περιοχή:</strong> <?php echo $ad['location']?> </li>
                            <li><strong>Τύπος απασχόλησης:</strong> <?php echo $ad['type']?> </li>
                            <li><strong>Ημερομηνία ανάρτησης:</strong> <?php echo $ad['date']?> </li>
                            <li><strong>Διάρκεια:</strong> <?php echo $ad['duration']?> </li>
                            <li><strong>Δημοσιευμένη:</strong> <?php echo $ad['published']?> </li>
                        </ul>
                    </div>
                    <!-- end of individual job advertisement-->
                </li>
                <?php } ?>
            </ul>
            </jobs>
        </div>
    <?php } else {
        echo '<div class="job-card"><h4>Δεν έχετε κάποια αγγελία στα αγαπημένα.</h4></div>';
    }?>






</body>
</html>