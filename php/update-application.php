<?php include "includes.php"; 
    session_start();
    include "connection.php";
    include "navigation.php";
    include "student-menu.php";
    include "includes.php";
?> 

<?php

if(isset($_POST['edit-application'])){

#    $id = $_POST['application-id'];
#   $updated = "updated";
#
# $sql = "UPDATE application SET status= 'updated' WHERE application_id = ".$id."";

 #$execute_query = mysqli_query($db, $sql);

    
  #  echo '<script> window.location = "my-applications.php"; </script>';
    
}

?>

<div id="application-form" style="background-color: transparent;" >        
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