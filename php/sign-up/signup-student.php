<?php
    include "../connection.php";

    session_start();

    if(isset($_SESSION['user'])){
        header("location: ../../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<?php include "../includes.php" ?>
<?php include "../navigation.php" ?>

    <header id="header" class="header">
        <div class="header-content">
            <div class="container" style="position: relative; width:100%; margin-top:1%;">
                <div class="card" style="border-width: 3px; display: flex; align-items: center; justify-content: center;">
                    <h4>Εγγραφή Φοιτητή-ριας</h4>  
                </div>
            </div>
            <!-- Signup Form for Students -->
            <div class="container" style="position: relative; width:100%; margin-top:1%;">
                <div class="card" style="border-width: 3px;">
                    <h6 style="margin-left:3.5%; margin-right:70%; margin-top:1%;">Προσωπικά Στοιχεία :</h6>        
                    <!-- Form inputs -->
                    <form action="submit.php" class="form-groupf" id="student-signup-form" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;" method="POST">
                        <!-- div row to show two inputs side by side -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="text" class="form-control-input notEmpty" id="student_name_greek" name="fname" required="">
                                    <label class="label-control" for="student_name_greek">Όνομα</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="text" class="form-control-input notEmpty" id="student_name" name="latin_fname" required="">
                                    <label class="label-control" for="student_name">Όνομα (στα Λατινικά)</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="text" class="form-control-input notEmpty" id="student_lastname_greek" name="lname" required="">
                                    <label class="label-control" for="student_lastname_greek">Επίθετο</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="text" class="form-control-input notEmpty" id="student_lastname" name="latin_lname" required="">
                                    <label class="label-control" for="student_lastname">Επίθετο (στα Λατινικά)</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="number" class="form-control-input notEmpty" id="phone" name="phone" required="">
                                    <label class="label-control" for="phone">Τηλέφωνο Επικοινωνίας</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <label for="date_of_birth" style="right:170%;">Ημερομηνία Γέννησης : </label>
                                    <input type="date" id="date_of_birth" name="date_of_birth" value="2001-01-01" min="1900-01-01" max="2005-01-01" style="margin-right: 30%;" required>
                                </div>    
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; margin-top: 20%; margin-bottom: 15%;">
                                    <h6>Στοιχεία Ιδρύματος:</h6>
                                </div>
                            </div>
                        </div>
                        
                        <!-- div row to show two inputs side by side -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <!-- TODO load from database --> 
                                    <select class="form-control-select" id="university" name="university" required="">
                                        <option class="select-option" value="" disabled="" selected="">Ίδρυμα</option>
                                        <option class="select-option" value="ekpa">ΕΚΠΑ</option>
                                        <option class="select-option" value="assoe">ΑΣΣΟΕ</option>
                                        <option class="select-option" value="papei">ΠΑΠΕΙ</option>
                                    </select>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="number" class="form-control-input notEmpty" id="am" name="am" required="">
                                    <label class="label-control" for="am">Αριθμός μητρώου</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <!-- TODO load from database --> 
                                    <select class="form-control-select" id="school" name="school" required="">
                                        <option class="select-option" value="" disabled="" selected="">Σχολή</option>
                                        <option class="select-option" value="natural">Θετικών Επιστημών</option>
                                        <option class="select-option" value="theoretical">Θεωρητικών Επιστημών</option>
                                    </select>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <select name="department" class="form-control-select" required="">
                                        <option value="">Τμήμα</option>
                                        <option value="Τμήμα Αρχιτεκτόνων Μηχανικών"> Τμήμα Αρχιτεκτόνων Μηχανικών </option>
                                        <option value=" Βιολογίας"> Βιολογίας</option>
                                        <option value="Γεωπονίας"> Γεωπονίας</option>
                                        <option value="Επιστήμης και Τεχνολογίας Τροφίμων"> Επιστήμης και Τεχνολογίας Τροφίμων </option>
                                        <option value=" Τεχνολόγων Γεωπόνων"> Τεχνολόγων Γεωπόνων</option>
                                        <option value="Οργάνωσης και Διοίκησης Επιχειρήσεων"> Οργάνωσης και Διοίκησης Επιχειρήσεων</option>
                                        <option value="Διοικητικής Επιστήμης και Τεχνολογίας"> Διοικητικής Επιστήμης και Τεχνολογίας</option>
                                        <option value=" Πολιτικών Μηχανικών"> Πολιτικών Μηχανικών</option>
                                        <option value="Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών"> Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών</option>
                                        <option value="Κοινωνιολογίας"> Κοινωνιολογίας </option>
                                        <option value="Εφαρμοσμένων Μαθηματικών και Φυσικών Επιστημών "> Εφαρμοσμένων Μαθηματικών και Φυσικών Επιστημών </option>
                                        <option value="Μηχανολόγων Μηχανικών">Μηχανολόγων Μηχανικών</option>
                                        <option value="Νομικής ">Νομικής  </option>
                                        <option value="Αγγλικής Γλώσσας και Φιλολογίας ">Αγγλικής Γλώσσας και Φιλολογίας </option>
                                        <option value="Πληροφορικής">Πληροφορικής</option>
                                        <option value="Πληροφορικής και Τηλεπικοινωνιών ">Πληροφορικής και Τηλεπικοινωνιών </option>
                                        <option value="Μηχανικών Πληροφορικής και Υπολογιστών">Μηχανικών Πληροφορικής και Υπολογιστών</option>
                                        <option value="Ψηφιακών Συστημάτων">Ψηφιακών Συστημάτων</option>
                                        <option value="Φιλολογίας ">Φιλολογίας </option>
                                        <option value="Χημείας ">Χημείας</option>
                                        <option value="Ψυχολογίας">Ψυχολογίας</option>
                                    </select>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; margin-top: 20%; margin-bottom: 15%;">
                                    <h6>Στοιχεία Λογαριασμού:</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="email" class="form-control-input notEmpty" id="Email" name="email" required="">
                                    <label class="label-control" for="email">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="email" class="form-control-input notEmpty" id="confirm_email" name="confirm_email" required="">
                                    <label class="label-control" for="confirm_email">Επιβεβαίωση Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="password" class="form-control-input notEmpty" id="password" name="password" required="">
                                    <label class="label-control" for="password">Κωδικός</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="password" class="form-control-input notEmpty" id="confirm_password" name="confirm_password" required="">
                                    <label class="label-control" for="confirm_password">Επιβεβαίωση Κωδικού</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->

                        <div class="row">
                            <div class="col-lg-6" style="left: 110%; width:200%; margin-top:10%; margin-bottom: 3%;">
                                <button id="confirmForm" name="register_btn" type="submit" class="form-control-submit-button" style="width: 80%; margin-left:2%; margin-bottom:2%;">Επιβεβαίωση Στοιχείων</button>
                            </div>
                        </div>
                    </form>
                    <!-- end of contact form -->
                </div>
            </div>        
        </div>
            
    </header>
</html>