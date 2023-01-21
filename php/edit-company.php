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

<?php
    #get students details
    $sql = "SELECT * FROM company WHERE id = " . $_SESSION['user']['id'] . ";";
    $result = mysqli_query($db, $sql);
    $stud = mysqli_fetch_assoc($result);
?>

<style>
      div {
        margin-bottom: 10px;
      }
      label {
        display: inline-block;
        width: 110px;
        color: #777777;
      }
      input {
        padding: 5px 10px;
      }

      .input-row{
        width:60%;
        display:flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 7px;
      }

      .input-ul{
        width:100%;
        display: flex;
        text-align: start;
        list-style-position: outside;
        list-style-type: none;
        padding: 1px;
      }

</style>


<div class="container">
    <div class="main-box" style="padding:10px;flex-direction:column;border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <!-- EDITABLE INPUT -->
        <form method="POST" action="edit-student-company-query.php" style="display:flex; flex-direction:column; width:100%;">  
            <ul class="input-ul" id="editable-details" style="text-align: start; display: none;">
                <h4>Στοιχεία λογαριασμού</h4>
                <div class="line"></div>
                <li class="input-row">Όνομα:
                    <input name="fname" style="width: 70%" type="text"  value="<?php echo $stud['fname'];?>">
                </li>
                <li class="input-row">Επώνυμο:
                    <input name="lname" style="width: 70%" type="text"  value="<?php echo $stud['lname'];?>">
                </li>
                <li class="input-row">Όνομα στα λατινικά:
                    <input name="latin_fname" style="width: 70%" type="text"  value="<?php echo $stud['latin_fname'];?>">
                </li>
                <li class="input-row"><label>Επώνυμο στα λατινικά:</label>
                    <input name="latin_lname" style="width: 70%" type="text"  value="<?php echo $stud['latin_lname'];?>">
                </li>
                <li class="input-row">Κινητό τηλέφωνο:
                    <input name="phone" style="width: 70%" type="text"  value="<?php echo $stud['phone'];?>">
                </li>
                <li class="input-row">Όνομα εταιρείας:
                    <input name="company_name" style="width: 70%" type="text"  value="<?php echo $stud['company_name'];?>">
                </li>
                <li class="input-row">Τηλέφωνο εταιρείας:
                    <input name="company_phone" style="width: 70%" type="text"  value="<?php echo $stud['company_phone'];?>">
                </li>
                <li class="input-row">ΑΦΜ:
                    <input name='afm' style="width: 70%" type="text" value="<?php echo $stud['afm'];?>">
                </li>
                <li class="input-row">ΔΟΥ:
                    <input name='doy' style="width: 70%" type="text" value="<?php echo $stud['doy'];?>">
                </li>
                <li class="input-row">Χώρα:
                    <input name='country' style="width: 70%" type="text" value="<?php echo $stud['country'];?>">
                </li>
                <li class="input-row">Οδός (όνομα αριθμός):
                    <input name='street' style="width: 70%" type="text" value="<?php echo $stud['street'];?>">
                </li>
                <li class="input-row">ΤΚ:
                    <input name='tk' style="width: 70%" type="text" value="<?php echo $stud['tk'];?>">
                </li>
                <li class="input-row">Περιοχή:
                    <input name='region' style="width: 70%" type="text" value="<?php echo $stud['region'];?>">
                </li>
                <li class="input-row">email:
                    <input name='email' style="width: 70%" type="text" value="<?php echo $stud['email'];?>">
                </li>
            </ul>
            <div id="saveButton" style="display:none; align-self: flex-end; margin-right:3%; margin-bottom:1%;">
                <button name="change-company-details" type="submit" onclick="SaveDetails();">Αποθήκευση</button>
            </div>
        </form>
        <!-- LOCKED INPUT -->
        <ul class="input-ul" id="disabled-details" style="text-align: start; display: block;">
                <h4>Στοιχεία λογαριασμού</h4>
                <div class="line"></div>
                <li class="input-row">Όνομα:
                    <input name="fname" style="width: 70%" type="text"  value="<?php echo $stud['fname'];?>" disabled>
                </li>
                <li class="input-row">Επώνυμο:
                    <input name="lname" style="width: 70%" type="text"  value="<?php echo $stud['lname'];?>" disabled>
                </li>
                <li class="input-row">Όνομα στα λατινικά:
                    <input name="latin_fname" style="width: 70%" type="text"  value="<?php echo $stud['latin_fname'];?>" disabled>
                </li>
                <li class="input-row"><label>Επώνυμο στα λατινικά:</label>
                    <input name="latin_lname" style="width: 70%" type="text"  value="<?php echo $stud['latin_lname'];?>" disabled>
                </li>
                <li class="input-row">Κινητό τηλέφωνο:
                    <input name="phone" style="width: 70%" type="text"  value="<?php echo $stud['phone'];?>" disabled>
                </li>
                <li class="input-row">Όνομα εταιρείας:
                    <input name="company_name" style="width: 70%" type="text"  value="<?php echo $stud['company_name'];?>" disabled>
                </li>
                <li class="input-row">Τηλέφωνο εταιρείας:
                    <input name="company_phone" style="width: 70%" type="text"  value="<?php echo $stud['company_phone'];?>" disabled>
                </li>
                <li class="input-row">ΑΦΜ:
                    <input name='afm' style="width: 70%" type="text" value="<?php echo $stud['afm'];?>" disabled>
                </li>
                <li class="input-row">ΔΟΥ:
                    <input name='doy' style="width: 70%" type="text" value="<?php echo $stud['doy'];?>" disabled>
                </li>
                <li class="input-row">Χώρα:
                    <input name='country' style="width: 70%" type="text" value="<?php echo $stud['country'];?>" disabled>
                </li>
                <li class="input-row">Οδός (όνομα αριθμός):
                    <input name='street' style="width: 70%" type="text" value="<?php echo $stud['street'];?>" disabled>
                </li>
                <li class="input-row">ΤΚ:
                    <input name='tk' style="width: 70%" type="text" value="<?php echo $stud['tk'];?>" disabled>
                </li>
                <li class="input-row">Περιοχή:
                    <input name='region' style="width: 70%" type="text" value="<?php echo $stud['region'];?>" disabled>
                </li>
                <li class="input-row">email:
                    <input name='email' style="width: 70%" type="text" value="<?php echo $stud['email'];?>" disabled>
                </li>
            </ul>
        <div id="editButton" style="display:block; align-self: flex-end; margin-right:3%; margin-bottom:1%;" disabled>
            <button onclick="EditDetails();" >Επεξεργασία</button>
        </div>
    </div>
</div>


</body>
</html>
