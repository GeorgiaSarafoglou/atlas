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
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link href="css/customstyles.css" rel="stylesheet">
	
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
    <nav id="nav" class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
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
                    <a class="nav-link page-scroll" href="search.php">Αναζήτηση</a>
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
                <button type="button" class="btn btn-primary" style="border-radius: 0.6rem;"> Εγγραφή </button>
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
                    <form id="loginForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="lname" required>
                                <label class="label-control" for="lname">Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="lpassword" required>
                                <label class="label-control" for="lpassword">Password</label>
                                <div class="help-block with-errors"></div>
                            </div>
                    </form>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="loggedIn" value="Keep-logged-in" required>Κράτησε με συνδεδεμένο
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <!-- Login Button -->
                <div class="modal-footer d-flex justify-content-center">
                    <!-- <button type="button" class="btn btn-primary" style="border-radius: 2rem; width:90%" >Login</button> -->
                    <button type="submit" class="form-control-submit-button" style="border-radius: 2rem; width:90%">Σύνδεση</button>
                </div>
                 <!-- Sign Up Button -->
                 <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="form-control-submit-button" style="border-radius: 2rem;; width:90%">Sign up</button>
                </div>
            </div>
        </div>
    </div>


    
 <!-- Header - Student info and search -->
 <header id="header" class="header">
        <div class="header-content">

        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- centered job advertisement board -->

    <div class="main-box">
        <jobs>
            <ul class="joblist">
                <li class="job">
                    <!-- individual job advertisment -->
                    <div class="job-card">
                        <div class="top-line">
                            <h3>Τίτλος θέσης </h3>
                            <button type="button" class="btn-favorite">Αποθήκευση
                                <i class="fa fa-heart" style="font-size:18px; color:white;"></i>
                            </button>
                        </div> 
                        <p>Τμήμα</p>
                        <ul class="job-features">
                            <li><strong>Περιοχή:</strong> Αθήνα</li>
                            <li><strong>Τύπος απασχόλησης:</strong> πλήρης</li>
                            <li><strong>Ημερομηνία ανάρτησης:</strong> 26/12/2022</li>
                            <li><strong>Διάρκεια:</strong> 3 μήνες</li>
                        </ul>
                    </div>
                    <!-- end of individual job advertisement-->
                </li>
                <li class="job">
                    <!-- individual job advertisment -->
                    <div class="job-card">
                        <div class="top-line">
                            <h3>Τίτλος θέσης </h3>
                            <button type="button" class="btn-favorite">Αποθήκευση
                                <i class="fa fa-heart" style="font-size:18px; color:white;"></i>
                            </button>
                        </div> 
                        <p>Τμήμα</p>
                        <ul class="job-features">
                            <li><strong>Περιοχή:</strong> Αθήνα</li>
                            <li><strong>Τύπος απασχόλησης:</strong> πλήρης</li>
                            <li><strong>Ημερομηνία ανάρτησης:</strong> 26/12/2022</li>
                            <li><strong>Διάρκεια:</strong> 3 μήνες</li>
                        </ul>
                    </div>
                    <!-- end of individual job advertisement-->
                </li>
            </ul>
        </jobs>
        <divider></divider>
        
        <filter class="filter">
                <ul class="filters">
                <li>
                    <button type="submit" class="form-control-submit-button" style="height: 20%; margin: 10px;">εκκαθάριση φίλτρων</button>

                </li>
                <li>
                    <div class="form-group">
                        <div class="form-outline">
                            <input type="search" class="form-control-input" id="search1" style="border-radius: 1rem;">
                            <label class="label-control" for="search1">Αναζήτηση</label>
                            <button class="btn btn-primary" type="submit" style="position: absolute; top: 0; right:0; border-radius: 1rem; height: 100%;">
                                <i class="fas fa-search"></i>
                            </button>  
                        </div>
                    </div>
                </li>
                <li>
                    <select class="filters" name="hours">
                        <option>Είδος απασχόλησης</option>
                        <option value="fulltime"> Πλήρης απασχόλησης </option>
                        <option value="parttime"> Μερικής απασχόλησης </option>
                    </select>
                </li>
                <li>
                    <select class="filters" name="duration">
                        <option>Διάρκεια πρακτικής</option>
                        <option value="fulltime"> 3 μήνες </option>
                        <option value="parttime">6 μήνες</option>
                    </select>
                </li>
                <li>
                    <select class="filters">
                        <option>Πόλη</option>
                        <option>Λίστα με πόλεις από βάση</option>
                    </select>
                </li>
                <li>
                    <label for="start">Από:</label>
                    <input type="date" id="start" name="trip-start"
                        value="2018-07-22"
                        min="2018-01-01" max="2018-12-31">
                </li>
                <li>
                    <label for="start">Εώς:</label>
                    <input type="date" id="start" name="trip-start"
                        value="2018-07-22"
                        min="2018-01-01" max="2018-12-31">
                </li>
            </ul>   
        </filter> 
        
    </div>
    <!-- end of centered job advertisement board -->



    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>