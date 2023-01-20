<!DOCTYPE html>
<html lang="en">

<?php include "includes.php"; 
    session_start();
    include "connection.php";
    include "navigation.php";
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
        <?php include "navigation.php"; ?>
        <!-- Header - Student info and search -->
    <header id="header" class="header">
        <div class="header-content">
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- start of main box -->
    <div class="mainbox">
        <div class="main-container">
            <div class="top-line">
                <h3>Τίτλος θέσης</h3>
                <button type="submit" class="form-control-submit-button" id="favorite">Αποθήκευση
                </button>
            </div>
            <p style="font-size: 18px; padding: 5px;">Τμήμα</p>
            <div class="line"></div>
            <div class="details">
                <ul class="job-features">
                    <li>Τοποθεσία</li>
                    <li>Πλήρες/Μερικό ωράριο</li>
                    <li>Διάρκεια: έναρξη - λήξη</li>
                    <li>Μισθός</li>
                </ul>
                <div style="padding: 5px;"></div>
                <h6>Περιγραφή:</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.</p>
                <h6>Παροχές:</h6>
                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.</p>
            <div class="bottom">
                <?php  if(isset($_SESSION['user'])){ ?>
                    <?php if($_SESSION['user']['role'] == 'students'){ ?>
                        <button class="form-control-submit-button" style="height: 20%; width: 15%; margin: 10px;" onclick="hideShowApplicationForm()"><a class="nav-link page-scroll" href="#application-form" style="all:unset;">Υποβολή αίτησης</a></button>
                    <?php }else{ ?>
                        <button class="form-control-submit-button" data-toggle="modal" data-target="#modalLoginForm" style="height: 20%; width: 15%; margin: 10px;">Υποβολή αίτησης</a></button>    
                    <?php }?>
                <?php }else{ ?>
                    <button class="form-control-submit-button" data-toggle="modal" data-target="#modalLoginForm" style="height: 20%; width: 15%; margin: 10px;">Υποβολή αίτησης</a></button>    
                <?php }?>
            </div>
            
            </div>
        </div>
        <div id="application-form" style="display:none">
           
            <div class="main-container">
                    <!-- form start -->
                    <form action="" method="POST">
                        <div class="top-line" style"justify-content: flex-start;">
                            <h3 >Αίτηση για πρακτική</h3>
                        </div>
    
                        <div class="line"></div>
                            <div class="attachment">
                                <div class="label-attach">
                                    <label for="myfile" name="myfile"><h6>Επισυνάψτε το έγγραφο</h6></label>
                                    <div id="tooltip"><h6><u>αναλυτικής βαθμολογίας</u>:</h6>
                                        <span id="tooltiptext">Η αναλυτική βαθμολογία δίνεται από τη γραμματεία κάθε τμήματος</span>
                                    </div>
                                </div>
                                <div class="input-attach">
                                    <input type="file" id="myfile" name="myfile"><br> <div id="invalid-file" style="color: red; display:none;">Η επισύναψη αναλυτικής βαθμολογίας είναι υποχρεωτική</div>
                                </div>
                            </div>
    
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" placeholder="Σχόλια" name="comments"></textarea>
                        </div>
                        
                        <div class="form-group bottom" style="display:flex;justify-content: space-between;">
                            <button type="submit" class="form-control-submit-button" id="save-form-button" name="save-application" >Προσωρινή αποθήκευση</button>
                            <button onclick="ApplicationFormModal()" type="button" class="form-control-submit-button"  style="height: 20%; width: 15%; margin: 10px;">Τελική Υποβολή</button>
                        </div>
    
                        <!-- Confirmation modal -->
                        <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="modalConfirm" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Είστε σίγουροι ότι θέλετε να υποβάλετε την αίτηση οριστικά</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="top-line">
                                        <!-- Confirm Button  -->
                                        <div class="modal-footer d-flex justify-content-center" style="order:2;">
                                            <button type="submit" name="submit-application" class="form-control-submit-button" style="border-radius: 2rem; width:100px; height: 30px;">Ναι</button>
                                        </div>
                                        <!-- Cancel Button -->
                                        <div class="modal-footer d-flex justify-content-center" style="order:1;">
                                            <a data-toggle="modal" data-target="#modalConfirm" href="">Ακύρωση</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </form>
                    <!-- form end -->
    
                    <?php
                        /* add application to db with STATUS = SAVED */
                        if (isset($_POST['save-application'])) {
                            $id = $_SESSION['user']['id'];
                            $sql = "INSERT INTO application(student_id, comments, grades, status, ad_id) VALUES('$id' , '"  .addslashes($_POST['comments'], ). "', NULL, 'saved', 2 )";
                            $db->query($sql); ?>
                            <script type="text/javascript">
                                window.location = "http://localhost/sdi1900168/atlas/php/my-applications.php";
                            </script> 
                    <?php } ?>
    
                    <?php
                        /* add application to db with STATUS = COMPLETED */
                        if (isset($_POST['submit-application'])) {
                            $id = $_SESSION['user']['id'];
                            $sql = "INSERT INTO application(student_id, comments, grades, status, ad_id) VALUES('$id' , '" .addslashes($_POST['comments'], ). "', NULL, 'completed', 2 )";
                            $db->query($sql); ?>
                            <script type="text/javascript">
                                window.location = "http://localhost/sdi1900168/atlas/php/my-applications.php";
                            </script> 
                    <?php } ?>
    
                </div>
            </div>
    </div>
    <!-- end of main box -->



</body>

   



</html>