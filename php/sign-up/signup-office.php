<!DOCTYPE html>
<html lang="en">
    <?php include "../includes.php" ?>
    <?php include "../navigation.php" ?>

    <header id="header" class="header">
    <div class="header-content">
            <div class="container" style="position: relative; width:100%; margin-top:1%;">
                <div class="card" style="border-width: 3px; display: flex; align-items: center; justify-content: center;">
                    <h4>Εγγραφή Φορέα Υποδοχής</h4>  
                </div>
            </div>
            

    
            <div class="container" style="position: relative; width:100%; margin-top:1%;">
                <div class="card" style="border-width: 3px;">      
                    <!-- Form inputs -->
                    <form method="POST" action="submit-office.php" class="form-groupo" id="signup_office_form_2" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;">
                        <!-- div row to show two inputs side by side -->
                        <!-- Όνομα -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="text" class="form-control-input notEmpty" id="office_name_greek" name="fname" required="">
                                    <label class="label-control" for="office_name_greek">Όνομα</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="text" class="form-control-input notEmpty" id="office_name" name="latin_fname" required="">
                                    <label class="label-control" for="office_name">Όνομα (στα Λατινικά)</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                        <!-- Επίθετο -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="text" class="form-control-input notEmpty" id="office_lastname_greek" name="lname" required="">
                                    <label class="label-control" for="office_lastname_greek">Επίθετο</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="text" class="form-control-input notEmpty" id="office_lastname" name="latin_lname" required="">
                                    <label class="label-control" for="office_lastname">Επίθετο (στα Λατινικά)</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                        <!-- Τηλέφωνο -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="number" class="form-control-input notEmpty" id="phone" name="phone" maxlength="10" minlength="10" required=>
                                    <label class="label-control" for="phone">Τηλέφωνο Επικοινωνίας</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                        <!-- Ημ/νία γέννησης -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <label for="date_of_birth" style="right:170%;">Ημερομηνία Γέννησης : </label>
                                    <input type="date" id="date_of_birth" name="date_of_birth" value="2001-01-01" min="1900-01-01" max="2005-01-01" style="margin-right: 30%;" required>
                                </div>    
                            </div>
                        </div>

                        <!-- Είδος Φορέα - Χώρα -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <select class="form-control-select" id="type" name="type" required="">
                                    <option class="select-option" value="" disabled="" selected="">--Επιλέξτε είδος φορέα--</option>
                                    <option class="select-option" value="idiotikos">Ιδιωτικός</option>
                                    <option class="select-option" value="dimosios">Δημόσιος</option>
                                </select>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%; ">
                                <select class="form-control-select" id="country" name="country" required="">
                                    <option class="select-option" value="" disabled="" selected="">--Χώρα--</option>
                                    <option class="select-option" value="gr">Ελλάδα</option>
                                    <option class="select-option" value="alb">Κύπρος</option>
                                    <option class="select-option" value="ger">Γερμανία</option>
                                    <option class="select-option" value="fr">Γαλλία</option>
                                    <option class="select-option" value="ru">Ρωσσία</option>
                                </select>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                    <!-- Πεδίο Δραστηριότητας - Οδός -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <!-- TODO load from database --> 
                                <select class="form-control-select" id="field" name="field" required="">
                                    <option class="select-option" value="" disabled="" selected="">--Επιλέξτε Πεδίο Δραστηριότητας--</option>
                                    <option class="select-option" value="search">Έρευνα</option>
                                    <option class="select-option" value="software">Ανάπτυξη λογισμικού</option>
                                    <option class="select-option" value="webaps">Ανάπτυξη Εφαρμογών Διαδικτύου</option>
                                    <option class="select-option" value="security">Προστασεία και Ασφάλεια</option>
                                </select>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%; ">
                                <input type="text" class="form-control-input notEmpty" id="street_no" name="street" required="">
                                <label class="label-control" for="street_no">Οδός-Αριθμός</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                    <!-- Επωνυμία - Τ.Κ. -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="text" class="form-control-input notEmpty" id="company_name" name="company_name" required="">
                                <label class="label-control" for="company_name">Επωνυμία</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%; ">
                                <input type="number" class="form-control-input notEmpty" id="tk" name="tk" required="">
                                <label class="label-control" for="tk">Τ.Κ.</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <!-- Τηλέφωνο - Περιφερειακή Ενότητα -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="number" class="form-control-input notEmpty" id="company_phone" name="company_phone" required="">
                                <label class="label-control" for="company_phone">Τηλέφωνο</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%;">
                                <!-- TODO load from database --> 
                                <select class="form-control-select" id="p_unit" name="region" required="">
                                    <option class="select-option" value="" disabled="" selected="">--Επιλέξτε περιφερειακή ενότητα--</option>
                                    <option class="select-option" value="drama">Π.Ε. Δράμας</option>
                                    <option class="select-option" value="euros">Π.Ε. Έβρου</option>
                                    <option class="select-option" value="kavala">Π.Ε. Καβάλας</option>
                                    <option class="select-option" value="thessaloniki">Μ.Ε. Θεσσαλονίκης</option>
                                    <option class="select-option" value="kozani">Π.Ε. Κοζάνης</option>
                                    <option class="select-option" value="larissa">Π.Ε. Λάρισας</option>
                                    <option class="select-option" value="voiotia">Π.Ε. Βοιωτίας</option>
                                    <option class="select-option" value="attiki">Π.Ε. Δυτικής Αττικής</option>
                                </select>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <!-- ΑΦΜ - Δήμος -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="number" class="form-control-input notEmpty" id="afm" name="afm" required="">
                                <label class="label-control" for="afm">Α.Φ.Μ.</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                        
                    </div> <!-- end of row -->
                    <!-- Δ.Ο.Υ. -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="number" class="form-control-input notEmpty" id="doy" name="doy" required="">
                                <label class="label-control" for="doy">Δ.Ο.Υ.</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <!-- Email -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="email" class="form-control-input notEmpty" id="company_email" name="company_email" required="">
                                <label class="label-control" for="company_email">Company email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                       
                         <!-- div row to show two inputs side by side -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="email" class="form-control-input notEmpty" name="email" required="">
                                <label class="label-control" for="email">Email</label>
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
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%; ">
                                <input type="password" class="form-control-input notEmpty" id="confirm_password" name="confirm_password" required>
                                <label class="label-control" for="confirm_password">Επιβεβαίωση Κωδικού</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                    <div class="row">
                        <!-- TODO submit form and create user, redirect to starting page for offices-->
                        <div class="col-lg-6" style="left: 110%; width:200%;">
                            <button id="confirmForm2" type="submit" class="form-control-submit-button" style="width: 80%; margin-left:2%; margin-bottom:2%;">Επιβεβαίωση Στοιχείων</button>
                        </div>
                    </div>


                    </form
                    <!-- end of contact form -->
                </div>
            </div>        
        </div>
    </header>

    
    
</html>