<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body data-target=".fixed-top">
    <?php include "../includes.php"; ?>
    <?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>


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

<?php
    if(!isset($_SESSION['user'])){
        include "../navigation.php"; ?>
        <header id="header" class="header">
        <div class="header-content"> <?php

?>
<?php
    }
    elseif($_SESSION['user']['role'] == 'company'){
        include "../office-menu.php";
        ?>
        </div> <?php
    }
    else{
        include "../student-menu.php"; ?>
        </div> <?php
    }
?>
    </body>

            <div class="container">
                <div class="row">
                    <!-- -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="../../images/page-under-construction.jpeg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->  
                    
                    <div class="col-lg-6">
                        <div class="text-container">
                            <br><br><br><br><br>
                            <!-- Are you a Student Text -->
                            <h4>Η ιστοσελίδα δεν είναι διαθέσιμη αυτή τη στιγμή.<br>Παρακαλούμε επισκεφτείτε την αργότερα</h4>
                            <p class="p-large"><a class="turquoise" href="../../index.php">Επιστροφή στην Αρχική</a></p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


</html>