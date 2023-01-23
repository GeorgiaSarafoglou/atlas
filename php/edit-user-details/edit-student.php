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

<?php
    #get students details
    $sql = "SELECT * FROM students WHERE id = " . $_SESSION['user']['id'] . ";";
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
                <li class="input-row">Ίδρυμα:
                <!-- Departments -->
                
                <select style="padding: 5px 10px; width: 70%" class="form-control-select" id="universities" name="university">
                    <option class="select-option" value="ekpa" <?php if($stud['university'] == "ekpa") { ?> selected <?php } ?>>ΕΚΠΑ</option>
                    <option class="select-option" value="assoe" <?php if($stud['university'] == "assoe") { ?> selected <?php } ?>>ΑΣΣΟΕ</option>
                    <option class="select-option" value="papei" <?php if($stud['university'] == "papei") { ?> selected <?php } ?>>ΠΑΠΕΙ</option>
                </select>

               
            </li>
            
            <?php if ($stud['school'] == 'natural') { ?>
                <li class="input-row">Θεματική περιοχή::
                <select style="padding: 5px 10px; width: 70%" class="form-control-select" id="school" name="school" required="">
                    <option class="select-option" value="natural" selected>Θετικών Επιστημών</option>
                    <option class="select-option" value="theoretical">Θεωρητικών Επιστημών</option>
                </select>
                <?php }else if($stud['school'] == 'theoretical'){ ?>
                <li class="input-row">Θεματική περιοχή::
                    <select style="padding: 5px 10px; width: 70%" class="form-control-select" id="school" name="school" required="">
                        <option class="select-option" value="natural" >Θετικών Επιστημών</option>
                        <option class="select-option" value="theoretical" selected>Θεωρητικών Επιστημών</option>
                    </select>
                    <?php } ?>
                </li>
                <li class="input-row">Τμήμα:
                    <input name="department" style="width: 70%" type="text"  value="<?php echo $stud['department'];?>">
                </li>
                <li class="input-row">Αριθμός μητρώου:
                    <input name='am' style="width: 70%" type="text" value="<?php echo $stud['am'];?>">
                </li>
                <li class="input-row">Αριθμός μητρώου:
                    <input name='email' style="width: 70%" type="text" value="<?php echo $stud['email'];?>">
                </li>
            </ul>
            <div id="saveButton" style="display:none; align-self: flex-end; margin-right:3%; margin-bottom:1%;">
                <button name="change-student-details" type="submit" onclick="SaveDetails();">Αποθήκευση</button>
            </div>
        </form>
        <!-- LOCKED INPUT -->
        <ul class="input-ul" id="disabled-details" style="text-align: start; display: block;">
            <h4>Στοιχεία λογαριασμού</h4>
            <div class="line"></div>
            <li class="input-row">Όνομα:
                <input style="width: 70%" type="text"  value="<?php echo $stud['fname'];?>" disabled>
            </li>
            <li class="input-row">Επώνυμο:
                <input style="width: 70%" type="text"  value="<?php echo $stud['lname'];?>" disabled>
            </li>
            <li class="input-row">Όνομα στα λατινικά:
                <input style="width: 70%" type="text"  value="<?php echo $stud['latin_fname'];?>" disabled>
            </li>
            <li class="input-row">Επώνυμο στα λατινικά:
                <input style="width: 70%" type="text"  value="<?php echo $stud['latin_lname'];?>" disabled>
            </li>
            <li class="input-row">Κινητό τηλέφωνο:
                <input style="width: 70%" type="text"  value="<?php echo $stud['phone'];?>" disabled>
            </li>
            <li class="input-row">Ίδρυμα:
                <!-- Departments -->
                <?php if ($stud['university'] == 'ekpa') { ?>
                    <select style="padding: 5px 10px; width: 70%" class="form-control-select" id="departments" name="department" disabled>
                        <option class="select-option" value="ekpa" selected>ΕΚΠΑ</option>
                        <option class="select-option" value="assoe">ΑΣΣΟΕ</option>
                        <option class="select-option" value="papei">ΠΑΠΕΙ</option>
                    </select>

                <?php }else if($stud['university'] == 'assoe'){ ?>
                    <select style="padding: 5px 10px; width: 70%" class="form-control-select" id="departments" name="department" disabled>
                        <option class="select-option" value="ekpa">ΕΚΠΑ</option>
                        <option class="select-option" value="assoe" selected>ΑΣΣΟΕ</option>
                        <option class="select-option" value="papei">ΠΑΠΕΙ</option>
                    </select>
               <?php }else{ ?>
                    <select style="padding: 5px 10px; width: 70%" class="form-control-select" id="departments" name="department" disabled>
                        <option class="select-option" value="ekpa">ΕΚΠΑ</option>
                        <option class="select-option" value="assoe" >ΑΣΣΟΕ</option>
                        <option class="select-option" value="papei" selected>ΠΑΠΕΙ</option>
                    </select>

                <?php } ?>
            </li>
                <?php if ($stud['school'] == 'natural') { ?>
                <li class="input-row">Θεματική περιοχή:
                <select style="padding: 5px 10px; width: 70%" class="form-control-select" id="school" name="school" required="" disabled>
                    <option class="select-option" value="natural" selected>Θετικών Επιστημών</option>
                    <option class="select-option" value="theoretical">Θεωρητικών Επιστημών</option>
                </select>
                <?php }else if($stud['school'] == 'theoretical'){ ?>
                    <li class="input-row">Θεματική περιοχή:
                    <select style="padding: 5px 10px; width: 70%" class="form-control-select" id="school" name="school" required="" disabled>
                        <option class="select-option" value="natural" >Θετικών Επιστημών</option>
                        <option class="select-option" value="theoretical" selected>Θεωρητικών Επιστημών</option>
                    </select>
               <?php } ?>
            </li>
            <li class="input-row">Τμήμα:
                <input style="width: 70%" type="text"  value="<?php echo $stud['department'];?>" disabled>
            </li>
            <li class="input-row">Αριθμός μητρώου:
                <input name='am' style="width: 70%" type="text" value="<?php echo $stud['am'];?>" disabled>
            </li>
            <li class="input-row">email:
                <input name='email' style="width: 70%" type="text" value="<?php echo $stud['email'];?>" disabled>
            </li>
        </ul>
        <div id="editButton" style="display:block; align-self: flex-end; margin-right:3%; margin-bottom:1%;">
            <button onclick="EditDetails();" >Επεξεργασία</button>
        </div>
    </div>
</div>


</body>
</html>

