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
                    <a href="signup.php" style="color: #007bff;"><i class="arrow right">2. Στοιχεία Χρήστη </a>
                    <span class="arrow" style="margin-left: 3%;">&#x2192;</span> 
                </span>
                <span style="margin-left: 2%;">
                    <i class="arrow right">3. Στοιχεία Ιδρύματος
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

            <!-- Signup Form for Students step 2 -->
            <div class="container" style="position: relative; width:100%; margin-top:1%;">
                <div class="card" style="border-width: 3px;">
                    <h6 style="margin-left:3.5%; margin-right:70%; margin-top:1%;">Προσωπικά Στοιχεία :</h6>        
                    <!-- Form inputs -->
                    <form id="signup_student_form_2" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;">
                        <!-- div row to show two inputs side by side -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="text" class="form-control-input notEmpty" id="student_name_greek" required="">
                                    <label class="label-control" for="student_name_greek">Όνομα</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="text" class="form-control-input notEmpty" id="student_name" required="">
                                    <label class="label-control" for="student_name">Όνομα (στα Λατινικά)</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="text" class="form-control-input notEmpty" id="student_lastname_greek" required="">
                                    <label class="label-control" for="student_lastname_greek">Επίθετο</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; left:15%; ">
                                    <input type="text" class="form-control-input notEmpty" id="student_lastname" required="">
                                    <label class="label-control" for="student_lastname">Επίθετο (στα Λατινικά)</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 200%; right:170%; ">
                                    <input type="text" class="form-control-input notEmpty" id="phone" required="">
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
    <div id="step3" style="display:none; height:65%;margin-top:5%;">
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
                <i class="arrow right">4. Στοιχεία Λογαριασμού
            </span>
        </h5>
        <!-- Progress Bar -->
        <div class="progress" style="height: 20px; width: 57%; margin-left:21.5%;">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- Signup Form for Students step 3 -->
        <div class="container" style="position: relative; width:100%; margin-top:1%;">
            <div class="card" style="border-width: 3px;">
                <h6 style="margin-left:3.5%; margin-right:70%; margin-top:1%;">Στοιχεία Ιδρύματος:</h6>        
                <!-- Form inputs -->
                <form id="signup_student_form_3" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;">
                    <!-- div row to show two inputs side by side -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <!-- TODO load from database --> 
                                <select class="form-control-select" id="rselect" required="">
                                    <option class="select-option" value="" disabled="" selected="">Ίδρυμα</option>
                                    <option class="select-option" value="ekpa">ΕΚΠΑ</option>
                                    <option class="select-option" value="assoe">ΑΣΣΟΕ</option>
                                    <option class="select-option" value="papei">ΠΑΠΕΙ</option>
                                </select>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%; ">
                                <input type="text" class="form-control-input notEmpty" id="am" required="">
                                <label class="label-control" for="am">Αριθμός μητρώου</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <!-- TODO load from database --> 
                                <select class="form-control-select" id="school" required="">
                                    <option class="select-option" value="" disabled="" selected="">Σχολή</option>
                                    <option class="select-option" value="ekpa">Θετικών Επιστημών</option>
                                    <option class="select-option" value="assoe">Θεωρητικών Επιστημών</option>
                                </select>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%; ">
                                <input type="text" class="form-control-input notEmpty" id="student_mail" required="">
                                <label class="label-control" for="student_mail">Ιδρυματικό Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <!-- TODO load from database --> 
                                <select class="form-control-select" id="department" required="">
                                    <option class="select-option" value="" disabled="" selected="">Τμήμα</option>
                                    <option class="select-option" value="di">ΠΛΗΡΟΦΟΡΙΚΗΣ ΚΑΙ ΤΗΛΕΠΙΚΟΙΝΩΝΙΩΝ</option>
                                    <option class="select-option" value="ds">ΦΥΣΙΚΗΣ</option>
                                    <option class="select-option" value="dm">ΜΑΘΗΜΑΤΙΚΟ</option>
                                </select>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
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

        <!-- Signup Form for Students step 4 -->
        <div class="container" style="position: relative; width:100%; margin-top:1%;">
            <div class="card" style="border-width: 3px;">
                <h6 style="margin-left:3.5%; margin-right:70%; margin-top:1%;">Στοιχεία Λογαριασμού:</h6>        
                <!-- Form inputs -->
                <form id="signup_student_form_4" data-toggle="validator" data-focus="false" novalidate="true" style="width: 40%;margin-left: 35%;margin-top:2%;">
                    <!-- div row to show two inputs side by side -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="email" class="form-control-input notEmpty" id="Email" required="">
                                <label class="label-control" for="email">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%; ">
                                <input type="email" class="form-control-input notEmpty" id="confirm_email" required="">
                                <label class="label-control" for="confirm_email">Επιβεβαίωση Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; right:170%; ">
                                <input type="password" class="form-control-input notEmpty" id="password" required="">
                                <label class="label-control" for="password">Κωδικός</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="form-group" style="width: 200%; left:15%; ">
                                <input type="password" class="form-control-input notEmpty" id="confirm_password" required="">
                                <label class="label-control" for="confirm_password">Επιβεβαίωση Κωδικού</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                    <div class="row">
                        <div class="col-lg-6" style="left: 80%; width:200%; margin-top: 5%;">
                            <a class="turquoise" href="#step3">Προηγούμενο βήμα</a>
                        </div>
                        <!-- TODO submit form and create user, redirect to starting page for students-->
                        <div class="col-lg-6" style="left: 60%; width:200%;">
                            <button id="confirmForm" type="submit" class="form-control-submit-button" style="width: 80%; margin-left:2%; margin-bottom:2%;">Επιβεβαίωση Στοιχείων</button>
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
       submitFormAndRedirect();
    </script>
</html>