<!DOCTYPE html>
<html lang="en">
<?php include "includes.php";?>
<head>
    <script>
        $(document).ready(function() {
            $('.sub-menu').hide(); //hide the sub-menu by default
            $('#left-menu > ul > li:nth-child(2) > a').click(function() { //select the "Παρακολούθηση Αγγελιών" list item
                $(this).next('.sub-menu').slideToggle(); //show or hide the sub-menu
            });
        });
        $(document).ready(function() {
            $('.sub-menu').hide(); //hide the sub-menu by default
            $('#left-menu > ul > li:nth-child(3) > a').click(function() { //select the "Αιτήσεις Ενδιαφέροντος" list item
                $(this).next('.sub-menu').slideToggle(); //show or hide the sub-menu
            });
        });
    </script>
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

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#profile" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> Το προφιλ μου
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="edit-student.php"><span class="item-text">Επεξεργασία Προφίλ</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="notifications.php"><span class="item-text">Ειδοποιήσεις</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="logout.php"><span class="item-text">Αποσύνδεση</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <header class="header" style="height: 80%;">
        <div class="header-content">
            <div class="row" style="width: 100%;">
                <!-- vertical menu left of page -->
                <div id="left-menu">
                    <ul>
                        <li><a href="search.php">Αναζήτηση Θέσεων</a></li>
                        <li class="has-sub-menu">
                            <a>Οι Αιτήσεις μου <i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="my-applications.php"">Όλες οι Αιτήσεις</a></li>
                                <li><a href="saved-applications.php">Αποθηκευμένες Αιτήσεις</a></li>
                                <li><a href="pending-applications.php">Εκκρεμείς</a></li>
                                <li><a href="accepted-applications.php">Εγκεκριμένες</a></li>
                                <li><a href="rejected-applications.php">Απορριφθείσες</a></li>
                            </ul>
                        </li>
                        <li><a href="favorites.php">Αγαπημένα</a></li>
                    </ul>
                </div>
    
                <!-- To start next page we need to create a <div class="col-lg-6"> and add whatever we want to be on center of page -->