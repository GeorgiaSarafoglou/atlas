<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
        <meta name="author" content="Inovatik">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
        <meta property="og:site_name" content="Atlas" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta property="og:type" content="article" />

        <!-- Website Title -->
        <title>Atlas</title>

        <!-- Scripts -->
        <script src="../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="../js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
        <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="../js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
        <script src="../js/scripts.js"></script> <!-- Custom scripts -->
        <script src="../js/myfunctions.js"></script> <!-- My functions scripts -->
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/fontawesome-all.css" rel="stylesheet">
        <link href="../css/swiper.css" rel="stylesheet">
        <link href="../css/magnific-popup.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">

        <!-- to use close-open functions for login modal -->
        <script type="text/javascript" src="../js/scripts.js"></script>

        <!-- Favicon  -->
        <link rel="icon" href="../images/atlas_logo.png">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="../index.php"><img src="../images/atlas_logo.png" alt="alternative" style="width: 143px; height:140px;"></a>

            <!-- navigation bar -->
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="../index.php">Αρχική Σελίδα</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="../search.php">Αναζήτηση</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="../index.php#student_details">Φοιτητές-ριες</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="../index.php#office_details">Φορέας Υποδοχής</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="php/under-construction.php">Γραφείο Π.Α <span class="sr-only">(current)</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="../index.php#contact">Επικοινωνία</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary" style="border-radius: 0.6rem;background-color:#00bfd8;border-color:#00bfd8" id="login_button" data-toggle="modal" data-target="#modalLoginForm">
                        <i class="fa fa-user"></i> Σύνδεση 
                    </button>
                    <button type="button" class="btn btn-primary" style="border-radius: 0.6rem;"> Εγγραφή </button>
                </span>
            </div>
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->
    </body>

    <header id="header" class="header">
        <div class="header-content">
            <br><br>
            <!-- Title of each step -->
            <h5>
                <span style="margin-left: 22%;">
                    <a href="signup.php" style="color: #007bff;"><i class="arrow right">1. Ιδιότητα Χρήστη </a>
                    <span class="arrow" style="margin-left: 3%;color: #007bff;">&#x2192;</span> 
                </span>
                <span style="margin-left: 2%;">
                    <a href="#header" style="color: #007bff;"><i class="arrow right">2. Στοιχεία Χρήστη </a>
                    <span class="arrow" style="margin-left: 3%;">&#x2192;</span> 
                </span>
                <span style="margin-left: 2%;">
                    <i class="arrow right">3. Στοιχεία Φορέα Υποδοχής
                    <span class="arrow" style="margin-left: 3%;">&#x2192;</span> 
                </span>
                <span style="margin-left: 2%;">
                    <i class="arrow right">4. Στοιχεία Λογαριασμού
                </span>
            </h5>
            <!-- Progress Bar -->
            <div class="progress" style="height: 20px; width: 57%; margin-left:21.5%;">
                <div class="progress-bar" role="progressbar" style="width: 48%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <!-- Signup Form for Ofiice step 2 -->
            <div class="container" style="position: relative; width:100%; margin-top:1%;">
                <div class="card" style="border-width: 3px;">
                    <h6 style="margin-left:3.5%; margin-right:70%; margin-top:1%;">Προσωπικά Στοιχεία :</h6>        
                    <!-- Form inputs -->
                    <form class="form-groupo" id="signup_office_form_2" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;">
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
                                    <input type="text" class="form-control-input notEmpty" id="phone" name="phone" required="">
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
                        <!-- Κουμπιά -->
                        <div class="row">
                            <div class="col-lg-6" style="left: 90%; width:200%; margin-top: 5%;">
                                <a class="turquoise" href="signup.php">Προηγούμενο βήμα</a>
                            </div>
                            <div class="col-lg-6" style="left: 70%; width:200%;">
                                <button id="signup-continue-btn-1" type="button" class="form-control-submit-button" style="width: 50%; margin-left:2%; margin-bottom:2%;">Συνέχεια</button>
                            </div>
                        </div>
                    </form>
                    <!-- end of contact form -->
                </div>
            </div>        
        </div>
    </header>

    <!-- Third step form -->
    <div id="step3" style="display:none; height:80%;margin-top:5%;">
        <!-- Title of each step -->
        <h5>
            <span style="margin-left: 22%;">
                <a href="signup.php" style="color: #007bff;"><i class="arrow right">1. Ιδιότητα Χρήστη </a>
                <span class="arrow" style="margin-left: 3%;color: #007bff;">&#x2192;</span> 
            </span>
            <span style="margin-left: 2%;">
                <a href="#header" style="color: #007bff;"><i class="arrow right">2. Στοιχεία Χρήστη </a>
                <span class="arrow" style="margin-left: 3%;">&#x2192;</span> 
            </span>
            <span style="margin-left: 2%;">
                <a href="#step3" style="color: #007bff;"><i class="arrow right">3. Στοιχεία Φορέα Υποδοχής </a>
                <span class="arrow" style="margin-left: 3%;">&#x2192;</span> 
            </span>
            <span style="margin-left: 2%;">
                <i class="arrow right">4. Στοιχεία Λογαριασμού
            </span>
        </h5>
        <!-- Progress Bar -->
        <div class="progress" style="height: 20px; width: 57%; margin-left:21.5%;">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- Signup Form for offices step 3 -->
        <div class="container" style="position: relative; width:100%; margin-top:1%; margin-bottom:5%;">
            <div class="card" style="border-width: 3px;">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 style="margin-left:3.5%; margin-top:1%;">Στοιχεία Φορέα Υποδοχής:</h6>    
                    </div>
                    <div class="col-lg-6">
                        <h6 style="margin-left:3.5%; margin-top:1%;">Στοιχεία Διεύθυνσης Έδρας:</h6>    
                    </div>
                </div>   
                <!-- Form inputs -->
                <form class="form-groupo" id="signup_office_form_3" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;">
                    <!-- div row to show two inputs side by side -->
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
                                    <option class="select-option" value="alb">Αλβανία</option>
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
                                <input type="text" class="form-control-input notEmpty" id="tk" name="tk" required="">
                                <label class="label-control" for="tk">Τ.Κ.</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <!-- Τηλέφωνο - Περιφερειακή Ενότητα -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="text" class="form-control-input notEmpty" id="company_phone" name="company_phone" required="">
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
                                <input type="text" class="form-control-input notEmpty" id="afm" name="afm" required="">
                                <label class="label-control" for="afm">Α.Φ.Μ.</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%;">
                                <!-- TODO load from database --> 
                                <select class="form-control-select" id="municipality" name="municipality" required="">
                                    <option class="select-option" value="" disabled="" selected="">--Επιλέξτε Καλλικρατικό Δήμο--</option>
                                    <option class="select-option" value="dafni">Δήμος Δάφνης</option>
                                    <option class="select-option" value="umitos">Δήμος Υμηττού</option>
                                    <option class="select-option" value="kesariani">Δήμος Καισαριανής</option>
                                    <option class="select-option" value="korudallos">Δήμος Κορυδαλλού</option>
                                </select>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <!-- Δ.Ο.Υ. -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="text" class="form-control-input notEmpty" id="doy" name="doy" required="">
                                <label class="label-control" for="doy">Δ.Ο.Υ.</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <!-- Email -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="text" class="form-control-input notEmpty" id="company_email" name="company_email" required="">
                                <label class="label-control" for="company_email">Company email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <!-- Κουμπιά -->
                    <div class="row">
                        <div class="col-lg-6" style="left: 90%; width:200%; margin-top: 5%;">
                            <a class="turquoise" href="#header">Προηγούμενο βήμα</a>
                        </div>
                        <div class="col-lg-6" style="left: 70%; width:200%;">  
                            <button id="signup-continue-btn-2" type="button" class="form-control-submit-button" style="width: 50%; margin-left:2%; margin-bottom:2%;">Συνέχεια</button>
                        </div>
                    </div>
                </form>
                <!-- end of contact form -->
            </div>
        </div>
    </div>

    <!-- Final step form -->
    <div id="step4" style="display:none; height:65%;margin-top:0%;">
        <!-- Title of each step -->
        <h5>
            <span style="margin-left: 22%;">
                <a href="signup.php" style="color: #007bff;"><i class="arrow right">1. Ιδιότητα Χρήστη </a>
                <span class="arrow" style="margin-left: 3%;color: #007bff;">&#x2192;</span> 
            </span>
            <span style="margin-left: 2%;">
                <a href="#header" style="color: #007bff;"><i class="arrow right">2. Στοιχεία Χρήστη </a>
                <span class="arrow" style="margin-left: 3%;">&#x2192;</span> 
            </span>
            <span style="margin-left: 2%;">
                <a href="#step3" style="color: #007bff;"><i class="arrow right">3. Στοιχεία Ιδρύματος </a>
                <span class="arrow" style="margin-left: 3%;">&#x2192;</span> 
            </span>
            <span style="margin-left: 2%;">
                <a href="#step4" style="color: #007bff;"><i class="arrow right">4. Στοιχεία Λογαριασμού </a>
            </span>
        </h5>
        <!-- Progress Bar -->
        <div class="progress" style="height: 20px; width: 57%; margin-left:21.5%;">
            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- Signup Form for offices step 4 -->
        <div class="container" style="position: relative; width:100%; margin-top:1%;">
            <div class="card" style="border-width: 3px;">
                <h6 style="margin-left:3.5%; margin-right:70%; margin-top:1%;">Στοιχεία Λογαριασμού:</h6>        
                <!-- Form inputs -->
                <form class="form-groupo" id="signup_office_form_4" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;" action="submit-office.php" method="POST">
                    <!-- div row to show two inputs side by side -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="email" class="form-control-input notEmpty" id="email" name="email" required="">
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
                        <div class="col-lg-6" style="left: 80%; width:200%; margin-top: 5%;">
                            <a class="turquoise" href="#step3">Προηγούμενο βήμα</a>
                        </div>
                        <!-- TODO submit form and create user, redirect to starting page for offices-->
                        <div class="col-lg-6" style="left: 60%; width:200%;">
                            <button id="confirmForm2" type="submit" class="form-control-submit-button" style="width: 80%; margin-left:2%; margin-bottom:2%;">Επιβεβαίωση Στοιχείων</button>
                        </div>
                    </div>
                </form>
                <!-- end of contact form -->
            </div>
        </div>
    </div>
   
    <!-- scroll down and show hidden divs -->
    <script>
       showAndScrollToStep3();
       showAndScrollToStep4();
       document.getElementById("confirmForm2").addEventListener("click", function(event) {
            event.preventDefault();
            console.log("here");
            officeSubmitForms();
        });
    </script>
    
</html>