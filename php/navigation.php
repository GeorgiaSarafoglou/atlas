<?php 
    require_once 'connection.php';
    
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    /* if we already have a session with an active user, redirect to appriprate page */
    if(isset($_SESSION['user'])){
        /* if user is student redirect to student starting page */
        if($_SESSION['user']['role'] == 'students'){
            header("location: http://localhost/sdi1900168/atlas/php/starting-pages/startingpage-student.php?user=".$_SESSION['user']['id']."");
        }
        else if($_SESSION['user']['role'] == 'company'){
            header("location: http://localhost/sdi1900168/atlas/php/starting-pages/startingpage-office.php?user=".$_SESSION['user']['id']."");
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
                        header("location: http://localhost/sdi1900168/atlas/php/starting-pages/startingpage-student.php?user=".$_SESSION['user']['id']."");
                    }
                    else{
                        header("location: http://localhost/sdi1900168/atlas/php/starting-pages/startingpage-office.php?user=".$_SESSION['user']['id']."");
                    }
                }
            }
            else{
                $errorMsg[] = "Λάθος email ή κωδικός";
            }
           
        }
    }
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="../index.php"><img src="../../images/atlas_logo.png" alt="alternative" style="width: 143px; height:140px;"></a>
    
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
                <a class="nav-link page-scroll" href="../../index.php">Αρχική Σελίδα <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../jobs/search.php">Θέσεις Πρακτικής</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../../index.php#student_details">Φοιτητές-ριες</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../../index.php#office_details">Φορέας Υποδοχής</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../other/under-construction.php">Γραφείο Π.Α</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../../index.php#contact">Επικοινωνία</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary" style="border-radius: 0.6rem;background-color:#00bfd8;border-color:#00bfd8" id="login_button" data-toggle="modal" data-target="#modalLoginForm">
                <i class="fa fa-user"></i> Σύνδεση 
            </button>
            <!-- Go to signup page -->
            <button type="button" class="btn btn-primary" style="border-radius: 0.6rem;" onclick="window.location.href = 'http://localhost/sdi1900168/atlas/php/sign-up/signup.php';">Εγγραφή </button>
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
                                <a href="signup.php"> 
                                    Εγγραφή
                                </a>
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>