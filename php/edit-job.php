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
    /* id of ad to be changed */
    $id = $_GET['edit-id'];

    /* id of company */
    $cid = $_SESSION['user']['id'];
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
</div>
            <div class="container" style="position: relative; width:100%; margin-top:1%;">
                <div class="card" style="border-width: 2px;">
                    <h4 style="margin-left: 40%;">Επεξεργασία Αγγελίας</h4>
                </div>
            </div>

            <!-- Get existing values of ad to display them on the form -->
            <?php 
                include "connection.php";

                /* find corresponding ad. */
                $sql_ad = "SELECT * FROM ads WHERE id = $id;";
                $result_ad = mysqli_query($db, $sql_ad);
                $ad = mysqli_fetch_assoc($result_ad);            
            ?>
            
            <div class="container" style="position: relative; width:100%; margin-top:1%;">
                <div class="card" style="border-width: 2px;">
                    <!-- Form inputs -->
                    <form class="form-group" id="publish_job_form" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;" method="POST">
                        <!-- Τίτλος Θέσης -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 450%; right:170%; margin-left: 25%; ">
                                    <input type="text" class="form-control-input notEmpty" id="title" name="title" value="<?php echo $ad['title']; ?>" />
                                    <label class="label-control" for="title">Τίτλος Θέσης</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->

                        <!-- Αντικείμενο -->
                         <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 450%; right:170%; margin-left: 25%; ">
                                    <?php
                                        if(isset($ad['subject'])){
                                            $subject = $ad['subject'];
                                        }
                                        else{
                                            $subject = "";
                                        }
                                    ?>
                                    <input type="text" class="form-control-input notEmpty" id="Subject" name="subject" value="<?php echo $ad['subject']; ?>" />
                                    <label class="label-control" for="subject">Αντικείμενο</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->

                        <!-- Αριθμός Θέσεων - Διάρκεια (μήνες) -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:145%;">
                                    <input type="text" class="form-control-input notEmpty" id="positions_available" name="positions_available" value="<?php echo $ad['positions']; ?>" />
                                    <label class="label-control" for="positions_available">Αριθμός Θέσεων</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left: -10%;">
                                    <input type="text" class="form-control-input notEmpty" id="Duration" name="duration" value="<?php echo $ad['duration']; ?>" />
                                    <label class="label-control" for="duration">Διάρκεια (μήνες)</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->

                        <!-- Departments -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 270%; right:145%; ">  
                                    <select class="form-control-select" id="departments" name="departments">
                                        <option class="select-option" value="" disabled="" selected="">Ίδρυμα</option>
                                        <option class="select-option" value="ekpa">ΕΚΠΑ</option>
                                        <option class="select-option" value="assoe">ΑΣΣΟΕ</option>
                                        <option class="select-option" value="papei">ΠΑΠΕΙ</option>
                                    </select>
                                </div>
                            </div> <!-- end of col -->
                        </div>

                        <!-- Type -->
                        <div class="row">
                            <div class="col-lg-6" style="right: 63%;">
                                <h6>Τύπος Απασχόλησης: </h6>
                            </div>
                            <div class="col-lg-6" style="right: 70%;">
                                <div style="margin-left: 15%; width: 200%; left: -10%;">
                                    <!-- User can choose only one option because they all have the same name -->
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="part" name="type" value="part-time">
                                        <label for="part">Μερική Απασχόληση</label>
                                        
                                        <input type="checkbox" id="full" name="type" value="full-time" style="margin-left: 15%;">
                                        <label for="full">Πλήρης Απασχόληση</label>
                                        
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <!-- Script to call disableOtherCheckbox function from myfunctions.js -->
                                    <script>disableOtherCheckbox("part", "full")</script>
                                </div>
                            </div>
                        </div>

                        <!-- Τοποθεσία -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 450%; right:170%; margin-left: 25%; ">
                                    <input type="text" class="form-control-input notEmpty" id="Location" name="location" value="<?php echo $ad['location']; ?>" />
                                    <label class="label-control" for="location">Τοποθεσία</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->

                        <!-- Αμοιβή -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 150%; right:170%; margin-left: 25%; ">
                                    <input type="text" class="form-control-input notEmpty" id="Payment" name="payment" value="<?php echo $ad['payment']; ?>" />
                                    <label class="label-control" for="payment">Αμοιβή (<span>&euro;</span>)</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->

                        <!-- Διάρκεια Εκτέλεσης Αρχή-Τέλος -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:145%; ">
                                    <label for="start" style="right:170%;">Αρχή Πρακτικής Άσκησης: </label>
                                    <input type="date" id="time_period_start" name="time_period_start" value="2023-01-01" min="2023-01-01" max="2024-01-01" style="margin-right: 30%;" required>
                                </div>    
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left: -45%; ">
                                    <label for="end" style="right:170%;">Τέλος Πρακτικής Άσκησης: </label>
                                    <input type="date" id="time_period_end" name="time_period_end" value="2023-01-31" min="2023-01-31" max="2024-04-01" style="margin-right: 30%;" required>
                                </div>  
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->

                        <!-- Περιγραφή Θέσης -->
                        <div class="row">
                            <div class="form-group" style="width: 500%; right:60%; ">
                                <textarea class="form-control-textarea notEmpty" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' id="description" style="width: 195%;" name="description"><?php echo $ad['description'];?></textarea>
                                <label class="label-control" for="description"> Περιγραφή Θέσης </label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <!-- Παροχές Ασφάλειας και Υγιεινής -->
                        <div class="row">
                            <div class="form-group" style="width: 500%; right:60%; ">
                                <textarea class="form-control-textarea notEmpty" id="insurance" name="insurance" style="width: 195%;"><?php echo $ad['insurance'];?></textarea>
                                <label class="label-control" for="insurance"> Παροχές Ασφάλειας και Υγιεινής </label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <!-- Υλικοτεχνική Υποδομή -->
                        <div class="row">
                            <div class="form-group" style="width: 500%; right:60%; ">
                                <textarea class="form-control-textarea notEmpty" id="logistical_support" name="infrastructure" style="width: 195%;"><?php echo $ad['infrastructure'];?></textarea>
                                <label class="label-control" for="infrastructure"> Υλικοτεχνική Υποδομή </label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:150%;">
                                    <button type="submit" class="form-control-submit-button" id="save-form-button" name="save-temp-job" style="margin-bottom: 2%; margin-top: 8%; height: 40%; width: 60%;">Προσωρινή αποθήκευση</button>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left: 70%;">
                                    <button id="publish" name="register_btn" type="submit" class="form-control-submit-button"  style="margin-bottom: 2%; margin-top: 8%; width: 60%; left: 60%; height:40%">Δημοσίευση Αγγελίας</button>
                                </div>
                            </div> <!-- end of col -->
                        </div>
                    </form>
                    <!-- end of contact form -->

                    <!-- Προσωρινή Αποθήκευση -->
                    <?php
                        /* add job ad to db with published = false */
                        if (isset($_POST['save-temp-job'])) {
                            $published = false;

                            $title = trim($_POST["title"]);
                            $subject = trim($_POST["subject"]);
                            $position_available = filter_input(INPUT_POST, "positions_available", FILTER_VALIDATE_INT);
                            $duration = filter_input(INPUT_POST, "duration", FILTER_VALIDATE_INT);
                            $departments = trim($_POST["departments"]);
                            $type = trim($_POST["type"]);
                            $location = trim($_POST["location"]);
                            $payment = filter_input(INPUT_POST, "payment", FILTER_VALIDATE_INT);
                            $time_period_start = trim($_POST["time_period_start"]);
                            $time_period_end = trim($_POST["time_period_end"]);
                            $description = trim($_POST["description"]);
                            $insurance = trim($_POST["insurance"]);
                            $infrastructures = trim($_POST["infrastructure"]);
                            
                            require_once "connection.php";
                            
                            if(isset($id)){
                                $sql = "UPDATE ads SET 
                                                title='$title', 
                                                subject='$subject', 
                                                positions='$position_available', 
                                                duration='$duration', 
                                                departments='$departments', 
                                                type='$type', 
                                                location='$location', 
                                                payment='$payment', 
                                                start='$time_period_start', 
                                                end='$time_period_end', 
                                                description='$description', 
                                                insurance='$insurance', 
                                                infrastructure='$infrastructures', 
                                                published='$published', 
                                                company_id='$cid' 
                                        WHERE id = '$id' ";

                                $query_run = mysqli_query($db, $sql);
                                if(!$query_run){
                                    echo "Something went wrong";
                                }
                            }
                    ?>
                        <script type="text/javascript">
                            window.location = "http://localhost/sdi1900168/atlas/php/watch-jobs-temp.php";
                        </script>

                    <?php 
                        } 
                        else if(isset($_POST['register_btn'])){
                            $error = "";
                            if (empty($_POST['title'])) {
                                $error .= "Title field is required <br>";
                            }
                            if (empty($_POST['subject'])) {
                                $error .= "Email field is required <br>";
                            }
                            if (empty($_POST['positions_available'])) {
                                $error .= "Positions field is required <br>";
                            }
                            if (empty($_POST['duration'])) {
                                $error .= "Duration field is required <br>";
                            }
                            if (empty($_POST['departments'])) {
                                $error .= "Department field is required <br>";
                            }
                            if (empty($_POST['type'])) {
                                $error .= "Type field is required <br>";
                            }
                            if (empty($_POST['location'])) {
                                $error .= "Location field is required <br>";
                            }
                            if (empty($_POST['payment'])) {
                                $error .= "Payment field is required <br>";
                            }
                            if (empty($_POST['time_period_start'])) {
                                $error .= "Start field is required <br>";
                            }
                            if (empty($_POST['time_period_end'])) {
                                $error .= "End field is required <br>";
                            }
                            if (empty($_POST['description'])) {
                                $error .= "Description field is required <br>";
                            }
                            if (empty($_POST['insurance'])) {
                                $error .= "Insurance field is required <br>";
                            }
                            if (empty($_POST['infrastructure'])) {
                                $error .= "Infastructure field is required <br>";
                            }
                            if($error){
                                echo $error;
                                die;
                            }
                            else{
                                /* filter variables */
                                $title = $_POST["title"];
                                $subject = $_POST["subject"];
                                $position_available = filter_input(INPUT_POST, "positions_available", FILTER_VALIDATE_INT);
                                $duration = filter_input(INPUT_POST, "duration", FILTER_VALIDATE_INT);
                                $departments = $_POST["departments"];
                                $type = $_POST["type"];
                                $location = $_POST["location"];
                                $payment = filter_input(INPUT_POST, "payment", FILTER_VALIDATE_INT);
                                $time_period_start = $_POST["time_period_start"];
                                $time_period_end = $_POST["time_period_end"];
                                $description = $_POST["description"];
                                $insurance = $_POST["insurance"];
                                $infrastructures = $_POST["infrastructure"];
                                $published = true;
                            }

                            require_once "connection.php";

                            if(isset($id)){
                                $published = true;
                                
                                $sql = "UPDATE ads SET 
                                                title='$title', 
                                                subject='$subject', 
                                                positions='$position_available', 
                                                duration='$duration', 
                                                departments='$departments', 
                                                type='$type', 
                                                location='$location', 
                                                payment='$payment', 
                                                start='$time_period_start', 
                                                end='$time_period_end', 
                                                description='$description', 
                                                insurance='$insurance', 
                                                infrastructure='$infrastructures', 
                                                published='$published', 
                                                company_id='$cid' 
                                        WHERE id = '$id' ";

                                $query_run = mysqli_query($db, $sql);
                                if(!$query_run){
                                    echo "Something went wrong";
                                }
                            }
                        ?>
                            <script type="text/javascript">
                                window.location = "http://localhost/sdi1900168/atlas/php/watch-jobs-active.php";
                            </script> 
                        <?php } ?>
                </div>
            </div>
        </div>
    </header>
</body>
