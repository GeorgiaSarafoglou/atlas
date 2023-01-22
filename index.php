<?php 
    require_once 'php/connection.php';
    
    session_start();

    /* if we already have a session with an active user, redirect to appriprate page */
    if(isset($_SESSION['user'])){
        /* if user is student redirect to student starting page */
        if($_SESSION['user']['role'] == 'students'){
            header("location: php/startingpage-student.php?user=".$_SESSION['user']['id']."");
        }
        else if($_SESSION['user']['role'] == 'company'){
            header("location: php/startingpage-office.php");
        }
    }

    if(isset($_POST['login_btn'])){
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = strip_tags($_POST['password']);

        if(empty($email)){
            $errorMsg[] = "Must enter email";
        }
        else if(empty($password)){
            $errorMsg[] = "Must enter password";
        }
        else{
            $stm ="SELECT email, id, fname, password, 'company' as source FROM company WHERE email='$email'
            UNION
            SELECT email, id, fname, password, 'students' as source FROM students WHERE email='$email' ";
            
            /* executes the query and pulls out the row from the database */
            $results = $db->query($stm);

            /* check if we actually have some rows returned from the query */
            if($results->num_rows > 0){
                $row = $results->fetch_assoc();
                /* check if password exists in database */
                if($password == $row['password']){
                    /* if yes then we can create our session (the superglobal variable $_SESSION with data) first bracket ['user'] is the key 
                    everything else is data we want to add to the session */
                    $_SESSION['user']['id'] = $row["id"];
                    $_SESSION['user']['name'] = $row["fname"];
                    $_SESSION['user']['role'] = $row["source"];

                    if($_SESSION['user']['role'] == 'students'){
                        header("location: php/startingpage-student.php?user=".$_SESSION['user']['id']."");
                    }
                    else{
                        header("location: php/startingpage-office.php");
                    }
                }
            }
            else{
                $errorMsg[] = "Λάθος email ή κωδικός";
            }
           
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Atlas</title>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- to use close-open functions for login modal -->
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- Favicon  -->
    <link rel="icon" href="images/atlas_logo.png">
</head>
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/atlas_logo.png" alt="alternative" style="width: 143px; height:140px;"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <!-- navigation bar -->
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php">Αρχική Σελίδα <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="php/search.php">Θέσεις Πρακτικής</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#student_details">Φοιτητές-ριες</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#office_details">Φορέας Υποδοχής</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="php/under-construction.php">Γραφείο Π.Α</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Επικοινωνία</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-primary" style="border-radius: 0.6rem;background-color:#00bfd8;border-color:#00bfd8" id="login_button" data-toggle="modal" data-target="#modalLoginForm">
                    <i class="fa fa-user"></i> Σύνδεση 
                </button>
                <!-- Go to signup page -->
                <button type="button" class="btn btn-primary" style="border-radius: 0.6rem;" onclick="window.location.href = 'php/signup.php';">Εγγραφή </button>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Login modal form -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Συνδεση και close button as x -->
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Σύνδεση</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body mx-3">
                    <!-- Login Form -->
                    <form id="loginForm" data-toggle="validator" data-focus="false" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control-input notEmpty" id="email" name="email" required>
                                <label class="label-control" for="email">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input notEmpty" id="password" name="password" required>
                                <label class="label-control" for="password">Password</label>
                                <div class="help-block with-errors"></div>
                            </div> 
                            <div class="form-group">
                                <a class="turquoise" href="#contact">Ξέχασα τον κωδικό μου</a>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="loggedIn" value="Keep-logged-in">Κράτησε με συνδεδεμένο
                                <div class="help-block with-errors"></div>
                            </div> 
                            <!-- Login Button -->
                            <div class="modal-footer d-flex justify-content-center">
                                <!-- <button type="button" class="btn btn-primary" style="border-radius: 2rem; width:90%" >Login</button> -->
                                <button type="submit" name="login_btn" id="login_btn" class="form-control-submit-button" style="border-radius: 2rem; width:90%">Σύνδεση</button>
                            </div>
                                <!-- Sign Up Button -->
                                <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="form-control-signup-button" style="border-radius: 2rem; width:90%;">
                                    <a href="php/signup.php"> 
                                        Εγγραφή
                                    </a>
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Header - Student info and search -->
    <header id="header" class="header" style="height: 80%;">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <!-- Are you a Student Text -->
                            <h1><span class="turquoise">Είστε φοιτητής-ρια;</span> Αναζητήστε Θέση Πρακτικής Άσκησης</h1>
                            <p class="p-large">Αναζητήστε θέση πρακτικής άσκησης γράφοντας τον τίτλο της θέσης που θέλετε (π.χ. Web Designer). <a class="turquoise" href="#student_details">Δείτε περισσότερα...</a></p>
                            
                            <!-- Search bar -->
                            <form action="php/search.php" method="POST">
                                <div class="form-group">
                                    <div class="form-outline">
                                        <input type="search" class="form-control-input notEmpty" id="search1" name="search1" style="border-radius: 1rem;">
                                        <label class="label-control" for="search1">Αναζήτηση</label>
                                        <button class="btn btn-primary" type="submit" name="btn-search" style="position: absolute; top: 0; right:0; border-radius: 1rem; height: 100%;">
                                            <i class="fas fa-search"></i>
                                        </button>  
                                    </div>
                                </div>
                            </form>
                            
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Foreas Ypodoxis Vimata kai dunatothtes  -->
    <div id="office_details" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Φορέας Υποδοχής</h2>
                    <p class="p-heading p-large">Ψάχνεις άτομο για πρακτική άσκηση στην εταιρεία σου;</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Δημιουργήστε Αγγελία</h4>
                            <p>Εισάγετε τις προσφερόμενες θέσεις Πρακτικής Άσκησης, συμπληρώνοντας στοιχεία όπως:<br>
                                - Περιγραφή θέσης, αντικείμενο<br>
                                - Απαιτούμενα τυπικά προσόντα υποψηφίου<br>
                                - Γεωγραφική περιοχή εκπόνησης ΠΑ<br>
                                - Χρονική διάρκεια και επιθυμητή περίοδο εκπόνησης ΠΑ<br>
                                - Περιορισμένου ή πλήρους ωραρίου κλπ.<br>
                            </p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Δείτε Αιτήσεις Ενδιαφέροντος</h4>
                            <p>Αφού εισάγετε κάποια θέση πρακτικής άσκησης μπορείτε να δείτε τις αιτήσεις ενδιαφέροντος που έχουν κάνει οι φοιτητές-ριες, καθώς και τα προσόντα τους, 
                                ώστε να κρίνετε τον-ην κατάλληλο-η για την θέση.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Έγκριση Αίτησης</h4>
                            <p>Αφού βρείτε τον-ην κατάλληλο-η για την πρακτική άσκηση και δεχτείτε την αίτησή του-ης, τότε μπορείτε να εγκρίνετε την αίτηση για το επόμενο στάδιο. Πλέον η 
                                αγγελία σας δε θα φαίνεται διαθέσιμη στα αποτελέσματα της αναζήτησης. </p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->

    <!-- φοιτητές δυνατότητες -->
    <div id="student_details" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Φοιτητές-ριες</h2>
                    <p class="p-heading p-large">Βρείτε θέση πρακτικής άσκησης</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Αναζητήστε τη θέση που σας ενδιαφέρει</h4>
                            <p>Μπορείτε να ψάξετε τη θέση που σας ενδιαφέρει με βάση διάφορα κριτήρια όπως:<br>
                                - Το τμήμα<br>
                                - Τη διάρκεια (3μηνη, 6μηνη)<br>
                                - Τον τρόπο απασχόλησης (πλήρης/μερική)<br>
                                - Την τοποθεσία απασχόλησης κλπ.<br>
                            </p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Στείλτε Αίτηση</h4>
                            <p>Μόλις βρείτε θέση που σας ενδιαφέρει μπορείτε να στείλετε αίτηση για αυτήν τη θέση.
                                Μπορείτε να στείλετε περισσότερες από μια αιτήσεις σε περίπτωση που βρείτε περισσότερες από μια θέσεις που σας ενδιαφέρουν.
                            </p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Αναμονή Έγκρισης Αίτησης</h4>
                            <p>Ο φορέας υποδοχής θα λάβει την αίτησή σας και θα την εξετάσει. Θα σας έρθει ειδοποίηση για την απόφασή του.
                            </p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Στοιχεία Επικοινωνίας</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Έχετε κάποιο πρόβλημα; Μη διστάσετε να μας καλέσετε ή να μας στείλετε μήνυμα.</li>
                        <li>τηλεφωνική επικοινωνία διαθέσιμη (Δευτέρα-Παρασκευή, 09:00-17:00)</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:215 215 7860">+215 215 7860</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:help@atlas.com">help@atlas.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6"> 
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Όνομα</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Το μήνυμά σας</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Υποβολή Μηνύματος</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Σχετικά με τον Άτλα</h4>
                        <p>Φέρνουμε σε επαφή τα γραφεία πρακτικής άσκησης με τους φοιτητές</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->
</body>
</html>