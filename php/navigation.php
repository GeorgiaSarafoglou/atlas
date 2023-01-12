<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="index.php"><img src="../images/atlas_logo.png" alt="alternative" style="width: 143px; height:140px;"></a>
    
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
                <a class="nav-link page-scroll" href="search.php">Θέσεις Πρακτικής</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#student_details">Φοιτητές-ριες</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#office_details">Φορέας Υποδοχής</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="under-construction.php">Γραφείο Π.Α</a>
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
            <button type="button" class="btn btn-primary" style="border-radius: 0.6rem;" onclick="window.location.href = 'signup.php';">Εγγραφή </button>
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
                <div class="form-group">
                    <a class="turquoise" href="#contact">Ξέχασα τον κωδικό μου</a>
                </div>
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
                <button type="submit" class="form-control-signup-button" style="border-radius: 2rem; width:90%;">Εγγραφή</button>
            </div>
        </div>
    </div>
</div>