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
    <link href="css/customstyles.css" rel="stylesheet">

    <!-- to use close-open functions for login modal -->
    <script type="text/javascript" src="js/scripts.js"></script>

	<!-- Favicon  -->
    <link rel="icon" href="images/atlas_logo.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
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
                    <a class="nav-link page-scroll" href="php/search.php">Αναζήτηση</a>
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
                    <i class="fa fa-user"></i> Το προφιλ μου
                </button>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <header class="header" style="height: 100%;">
        <div class="header-content">
            <div class="row">
                <!-- vertical menu left of page -->
                <div id="left-menu">
                    <ul>
                        <li><a href="#">Αναζήτηση Θέσεων</a></li>
                        <li><a href="#">Οι Αιτήσεις Μου</a></li>
                        <li><a href="#">Αγαπημένα</a></li>
                        <li><a class="btn btn-primary" href="php/logout.php">Αποσύνδεση</a></li>
                    </ul>
                </div>
                <!-- To start next page we need to create a <div class="col-lg-6"> and add whatever we want to be on center of page -->