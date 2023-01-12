<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../css/customstyles.css" rel="stylesheet">
	
    <?php include "includes.php"; ?>
</head>

<body data-spy="scroll" data-target=".fixed-top">
    
    
    <?php include "navigation.php"; ?>

    <!-- Preloader -->
  <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
   
    <?php include "header.php"; ?>

    <div class="main-box">
        <jobs>
            <ul class="joblist">
                <li class="job">
                    <!-- individual job advertisment -->
                    <div class="job-card">
                        <div class="top-line">
                            <h3><a href="job-details.php">Τίτλος θέσης</a></h3>
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
        
        <filter class="filter">
                <ul class="filters">
                <li>
                    <button type="submit" class="form-control-submit-button" style="height: 20%; margin: 10px;">εκκαθάριση φίλτρων</button>

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


<footer">
    <p> Είστε <strong>Φορέας Υποδοχής</strong>; <a href = "./php/signup-office.php" style="color: blue">Προθέστε αγγελία για θέση πρακτικής<a> </p>
</footer>