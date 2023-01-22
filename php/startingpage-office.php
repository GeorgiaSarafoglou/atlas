<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes.php" ?>
</head>
    <?php include "office-menu.php" ?>
            <div class="container">
                <div class="row">
                    <!-- vertical menu left of page -->
                    <div class="col-lg-6">
                        <div class="text-container">
                            <!-- Are you a Student Text -->
                            <h1><span class="turquoise">Είστε φοιτητής-ρια;</span> Αναζητήστε Θέση Πρακτικής Άσκησης</h1>
                            <p class="p-large">Αναζητήστε θέση πρακτικής άσκησης γράφοντας τον τίτλο της θέσης που θέλετε (π.χ. Web Designer). <a class="turquoise" href="#student_details">Δείτε περισσότερα...</a></p>
                            
                            <!-- Search bar -->
                            <form action="search.php" method="POST">
                                <div class="form-group">
                                    <div class="form-outline">
                                        <input type="search" class="form-control-input" id="search1" name="search1" style="border-radius: 1rem;">
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
                            <img class="img-fluid" src="../images/header-teamwork.svg" alt="alternative">
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
                        <img class="card-image" src="../images/services-icon-1.svg" alt="alternative">
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
                        <img class="card-image" src="../images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Δείτε Αιτήσεις Ενδιαφέροντος</h4>
                            <p>Αφού εισάγετε κάποια θέση πρακτικής άσκησης μπορείτε να δείτε τις αιτήσεις ενδιαφέροντος που έχουν κάνει οι φοιτητές-ριες, καθώς και τα προσόντα τους, 
                                ώστε να κρίνετε τον-ην κατάλληλο-η για την θέση.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="../images/services-icon-3.svg" alt="alternative">
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
                        <img class="card-image" src="../images/services-icon-1.svg" alt="alternative">
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
                        <img class="card-image" src="../images/services-icon-2.svg" alt="alternative">
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
                        <img class="card-image" src="../images/services-icon-3.svg" alt="alternative">
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