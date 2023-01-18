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
        <script src="../js/myfunctions.js"></script> <!-- Custom my functions scripts -->
        
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
        <!-- Preloader -->
        <div class="spinner-wrapper">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <!-- end of preloader -->

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
                    <i class="arrow right">2. Στοιχεία Χρήστη
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
                <div class="progress-bar" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <!-- Form first step -->
            <div id="choice" class="form-1" style="background-color: transparent; width:100%;">
                <div class="container">
                    <!-- Επιλογή φοιτητή - γραφείου -->
                    <div class="card" style="border-width: 3px;">
                        <div class="card-body">
                            <div class="form-group has-error has-danger">
                                <h4> Συνέχεια ως :</h4>
                                <div style="margin-left: 15%;">
                                    <!-- User can choose only one option because they all have the same name -->
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="isStudent" name="continueAs" value="student">
                                        <label for="isStudent">Φοιτητής-ρια</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="isOffice" name="continueAs" value="office" >
                                        <label for="isOffice">Γραφείο Υποδοχής</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Script to call disableOtherCheckbox function from myfunctions.js -->
                                    <script>disableOtherCheckbox("isStudent", "isOffice")</script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Error message for when no checkbox is checked -->
                            <div id="error-message-signup" style="width: 20%; margin-left: 75%; color:red"></div><br>
                            <button type="submit" class="form-control-submit-button" style="width: 20%; margin-left: 75%;" id="signupButton1">Συνέχεια</button>
                            
                            <!-- Apply on click to button. On click of submit button redirectToPageByCheckbox() is called -->
                            <script>
                                var submitButton = document.getElementById("signupButton1");
                                submitButton.addEventListener("click", function(event) {
                                    event.preventDefault();
                                    redirectToPageByCheckbox();
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

</html>