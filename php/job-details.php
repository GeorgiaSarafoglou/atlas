<!DOCTYPE html>
<html lang="en">

<?php include "includes.php"; 
    session_start();
    include "connection.php";
?> 

<?php
            if(!isset($_SESSION['user'])){
                include "navigation.php";
        ?>
            <header class="header" style="height: 80%;">
                <div class="header-content">
                    <div class="row" style="width: 100%;">
        <?php
            }
            elseif($_SESSION['user']['role'] == 'company'){
                include "office-menu.php";
            }
            else{
                include "student-menu.php";
            }
        ?>


<?php 
    #find corresponding ad.
    if (isset($_POST['show-details'])) {
        $sql_ad = "SELECT * FROM ads WHERE id = " . $_POST['ad-id'] . ";";
        $result_ad = mysqli_query($db, $sql_ad);
        $ad = mysqli_fetch_assoc($result_ad);
        $ad_id = $ad['id'];
    }    
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


    <!-- start of main box -->
    <div class="mainbox">
        <div class="main-container">
            <div class="top-line">
                <h3><?php echo $ad['title']?></h3>
                <button type="submit" class="form-control-submit-button" id="favorite">Αποθήκευση
                </button>
            </div>
            <p style="font-size: 18px; padding: 5px;"><?php echo $ad['subject']?></p>
            <div class="line"></div>
            <div class="details">
                <ul class="job-features">
                    <li><strong>Τοποθεσία:</strong><?php echo $ad['location']?></li>
                    <li><strong>Ωράριο</strong>:<?php echo $ad['type']?></li>
                    <li><strong>Έναρξη</strong>:<?php echo $ad['start']?> - <strong>Λήξη</strong>:<?php echo $ad['end']?></li>
                    <li><strong>Μισθός</strong>:<?php echo $ad['payment']?></li>
                </ul>
                <div style="padding: 5px;"></div>
                <h6>Περιγραφή:</h6>
                <p><?php echo $ad['description']?></p>
                <h6>Αφάλεια:</h6>
                <p ><?php echo $ad['insurance']?></p>
                <h6>Υποδομές</h6>
                <p><?php echo $ad['infrastructure']?></p>
            <div class="bottom">
                <?php if ($_POST['show-submit-application'] == 1) { ?>
                <?php if (isset($_SESSION['user'])) { ?>
                    <?php if ($_SESSION['user']['role'] == 'students') { ?>
                        <button class="form-control-submit-button" style="height: 20%; width: 15%; margin: 10px;" onclick="hideShowApplicationForm()"><a class="nav-link page-scroll" href="#application-form" style="all:unset;">Υποβολή αίτησης</a></button>
                    <?php } else { ?>
                        <button class="form-control-submit-button" data-toggle="modal" data-target="#modalLoginForm" style="height: 20%; width: 15%; margin: 10px;">Υποβολή αίτησης</a></button>    
                    <?php } ?>
                <?php } else { ?>
                    <button class="form-control-submit-button" data-toggle="modal" data-target="#modalLoginForm" style="height: 20%; width: 15%; margin: 10px;">Υποβολή αίτησης</a></button>    
                <?php }
                }?>
            </div>
            
            </div>
        </div>

           
            <div class="main-container" id="application-form" style="display:none">
                    <!-- form start -->
                    <form action="submit-application.php" method="POST" enctype="multipart/form-data">
                        <div class="top-line" style"justify-content: flex-start;">
                            <h3 >Αίτηση για πρακτική</h3>
                        </div>
    
                        <div class="line"></div>
                            <div class="attachment">
                                <div class="label-attach">
                                    <label for="myfile"<h6>Επισυνάψτε το έγγραφο</h6></label>
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
                            <input type="hidden" name="ad-id" value="<?php echo $ad['id']; ?>">
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
    

    
                </div>
      
    </div>
    <!-- end of main box -->

</body>

   



</html>