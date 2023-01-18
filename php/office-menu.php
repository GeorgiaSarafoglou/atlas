<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes.php" ?>
</head>
<body data-spy="scroll" data-target=".fixed-top">
   
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="../index.php"><img src="../images/atlas_logo.png" alt="alternative" style="width: 143px; height:140px;"></a>
        
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
                    <a class="nav-link page-scroll" href="../index.php">Αρχική Σελίδα <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="search.php">Θέσεις Πρακτικής</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../index.php#student_details">Φοιτητές-ριες</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../index.php#office_details">Φορέας Υποδοχής</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="under-construction.php">Γραφείο Π.Α</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../index.php#contact">Επικοινωνία</a>
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

    <header class="header" style="height: 80%;">
        <div class="header-content">
            <div class="row" style="width: 100%;">
                <!-- vertical menu left of page -->
                <div id="left-menu">
                    <ul>
                        <li><a href="create-job-offer.php">Δημιουργία Αγγελίας</a></li>
                        <li><a href="watch-jobs.php">Παρακολούθηση Αγγελιών</a></li>
                        <li><a href="#">Αιτήσεις Ενδιαφέροντος</a></li>
                        <li><a class="btn btn-primary" href="logout.php">Αποσύνδεση</a></li>
                    </ul>
                </div>
                <!-- To start next page we need to create a <div class="col-lg-6"> and add whatever we want to be on center of page -->