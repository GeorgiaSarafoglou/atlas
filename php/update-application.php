<?php include "includes.php"; 
    session_start();
    include "connection.php";
    include "student-menu.php";
    include "includes.php";
?> 

<?php

if(isset($_POST['edit-application'])){
    #get application from its id
    $sql = "SELECT * FROM application WHERE application_id = ".$_POST['application-id']. ";";
    $result = mysqli_query($db, $sql);
    /* check if we have results */
    $application = mysqli_fetch_assoc($result);
}

?>

<div class="mainbox" style="background-color: transparent;" >        
    <div class="main-container">
    <!-- form start -->
    <form action="edit-application-file.php" method="POST" enctype="multipart/form-data">
        <div class="top-line" style"justify-content: flex-start;">
            <h3 >Αίτηση για πρακτική</h3>
        </div>

        <div class="line"></div>
        <?php if ($application['grades'] != NULL) { ?>
            <li style="margin-bottom: 10px;"><strong><a href="<?php echo "../uploads/".$application['grades'].""; ?>">Αναλυτική βαθμολογία</strong></a></li>
            <form  method="POST" action="edit-appliaction-file.php">
                <input type="hidden" name="application-id" value="<?php echo $_POST['application-id']; ?>">
                <button class="form-control-submit-button" type="submit" name="delete-grade-file" style="width:25%; height: 10%;" id="favorite"> Διαγραφή αρχείου αναλυτικής βαθμολογίας </button>
            </form>
            <?php } else { ?>
                <div class="attachment">
                    <div class="label-attach">
                        <label for="myfile"<h6>Επισυνάψτε το έγγραφο</h6></label>
                        <div id="tooltip"><h6><u>αναλυτικής βαθμολογίας</u>:</h6>
                            <span id="tooltiptext">Η αναλυτική βαθμολογία δίνεται από τη γραμματεία κάθε τμήματος</span>
                        </div>
                    </div>
                    <div class="input-attach">
                        <input type="file" id="myfile" name="updatefile"><br> <div id="invalid-file" style="color: red; display:none;">Η επισύναψη αναλυτικής βαθμολογίας είναι υποχρεωτική</div>
                    </div>
                </div>
            <?php } ?>
        <div class="form-group">
            <textarea class="form-control-textarea" id="cmessage" placeholder="Σχόλια" name="comments"><?php echo $application['comments']?></textarea>
        </div>
        
        <div class="form-group bottom" style="display:flex;justify-content: space-between;">
            <input type="hidden" name="application-id" value="<?php echo $_POST['application-id']; ?>">
            <button type="submit" class="form-control-submit-button" id="save-form-button" name="save-application-edit">Προσωρινή αποθήκευση</button>
            <?php if($application['grades'] != NULL){?>
                <!-- if file exists -->
                <button  data-toggle="modal" data-target="#modalConfirm" type="button" class="form-control-submit-button"  style="height: 20%; width: 15%; margin: 10px;">Τελική Υποβολή</button>
                <?php }else{ ?>
                <!-- if file didnt exist -->
                <button onclick="ApplicationFormModal()" type="button" class="form-control-submit-button"  style="height: 20%; width: 15%; margin: 10px;">Τελική Υποβολή</button>
            <?php } ?>
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
                        <input type="hidden" name="application-id" value="<?php echo $_POST['application-id']; ?>">
                        <button type="submit" name="submit-application-edit" class="form-control-submit-button" style="border-radius: 2rem; width:100px; height: 30px;">Ναι</button>
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
</div>
</div>
<!-- form end -->