<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_POST['search1'])){
        $searchValue = $_POST['search1'];
    }

?>

<!DOCTYPE html>
<html lang="en">
    <link href="../../css/customstyles.css" rel="stylesheet">
    <?php include "../includes.php"; ?>


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
                include "../navigation.php";
        ?>
            <header class="header" style="height: 80%;">
                <div class="header-content">
                    <div class="row" style="width: 100%;">
        <?php
            }
            elseif($_SESSION['user']['role'] == 'company'){
                include "../office-menu.php";
            }
            else{
                include "../student-menu.php";
            }
        ?>

</div>
        <div class="container" style="position: relative; width:100%; margin-top:-1%;">
            <div class="card" style="border-width: 2px; width:110%;">
                <h4 style="margin-left: 40%;">Θέσεις πρακτικής</h4>
            </div>
        </div>
        <div class="row" style="width: 100%;">
        
        <div class="main-box" style="margin-left: 10%; width:100%; background-color: transparent;" >
            <filter class="filter" style="border-right: 1px solid black;">
                <ul class="filters">
                    <form action="" method="GET">
                        <li>
                            <button id="clear_filters" name="clear_filters" type="submit" class="form-control-submit-button" style="height: 20%; margin: 10px; width: 90%;">εκκαθάριση φίλτρων</button>
                        </li>
                        <!-- Search bar -->
                        <div class="form-group">
                            <div class="form-outline">
                                <input type="search" class="form-control-input notEmpty" id="search1" name="search1" style="border-radius: 1rem; width: 90%; margin-left:2%;">
                                <label class="label-control" for="search1">Αναζήτηση με Τίτλο</label>  
                            </div>
                        </div>
                        <li>
                            <select class="filters" name="hours">
                                <option value="">Είδος απασχόλησης</option>
                                <option value="full-time"> Πλήρης απασχόλησης </option>
                                <option value="part-time"> Μερικής απασχόλησης </option>
                            </select>
                        </li>
                        <li>
                            <select class="filters" name="duration">
                                <option value="">Διάρκεια πρακτικής</option>
                                <option value="3"> 3 μήνες </option>
                                <option value="6">6 μήνες</option>
                            </select>
                        </li>
                        <li>
                        <select class="filters" name="city">
                            <option value="">Πόλη</option>
                            <option value="Αθήνα">Αθήνα</option>
                            <option value="Θεσσαλονίκη">Θεσσαλονίκη</option>
                            <option value="Πάτρα">Πάτρα</option>
                            <option value="Ηράκλειο">Ηράκλειο</option>
                            <option value="Λάρισσα">Λάρισσα</option>
                            <option value="Βόλος">Βόλος</option>
                            <option value="Ιωάννινα">Ιωάννινα</option>
                            <option value="Τρίκαλα">Τρίκαλα</option>
                            <option value="Χαλκίδα">Χαλκίδα</option>
                            <option value="Σέρρες">Σέρρες</option>
                            <option value="Αλεξανδρούπολη">Αλεξανδρούπολη</option>
                            <option value="Ξάνθη">Ξάνθη</option>
                            <option value="Κατερίνη">Κατερίνη</option>
                            <option value="Καλαμάτα">Καλαμάτα</option>
                            </select>
                        </li>
                        <li>
                        <select class="filters" name="department">
                            <option value="">Τμήμα</option>
                            <option value="Τμήμα Αρχιτεκτόνων Μηχανικών"> Τμήμα Αρχιτεκτόνων Μηχανικών </option>
                            <option value=" Βιολογίας"> Βιολογίας</option>
                            <option value="Γεωπονίας"> Γεωπονίας</option>
                            <option value="Επιστήμης και Τεχνολογίας Τροφίμων"> Επιστήμης και Τεχνολογίας Τροφίμων </option>
                            <option value=" Τεχνολόγων Γεωπόνων"> Τεχνολόγων Γεωπόνων</option>
                            <option value="Οργάνωσης και Διοίκησης Επιχειρήσεων"> Οργάνωσης και Διοίκησης Επιχειρήσεων</option>
                            <option value="Διοικητικής Επιστήμης και Τεχνολογίας"> Διοικητικής Επιστήμης και Τεχνολογίας</option>
                            <option value=" Πολιτικών Μηχανικών"> Πολιτικών Μηχανικών</option>
                            <option value="Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών"> Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών</option>
                            <option value="Κοινωνιολογίας"> Κοινωνιολογίας </option>
                            <option value="Εφαρμοσμένων Μαθηματικών και Φυσικών Επιστημών "> Εφαρμοσμένων Μαθηματικών και Φυσικών Επιστημών </option>
                            <option value="Μηχανολόγων Μηχανικών">Μηχανολόγων Μηχανικών</option>
                            <option value="Νομικής ">Νομικής  </option>
                            <option value="Αγγλικής Γλώσσας και Φιλολογίας ">Αγγλικής Γλώσσας και Φιλολογίας </option>
                            <option value="Πληροφορικής">Πληροφορικής</option>
                            <option value="Πληροφορικής και Τηλεπικοινωνιών ">Πληροφορικής και Τηλεπικοινωνιών </option>
                            <option value="Μηχανικών Πληροφορικής και Υπολογιστών">Μηχανικών Πληροφορικής και Υπολογιστών</option>
                            <option value="Ψηφιακών Συστημάτων">Ψηφιακών Συστημάτων</option>
                            <option value="Φιλολογίας ">Φιλολογίας </option>
                            <option value="Χημείας ">Χημείας</option>
                            <option value="Ψυχολογίας">Ψυχολογίας</option>
                        </select>
                        </li>
                        <li>
                            <label for="start">Από:</label>
                            <input type="date" id="start" name="trip-start" value="" min="2018-01-01">
                        </li>
                        <li>
                            <label for="end">Εώς:</label>
                            <input type="date" id="end" name="trip-end" value="" min="2018-01-01">
                        </li>
                        <!-- function to get current date -->
                        <script>
                            // Get the current date
                            const currentDate = new Date();
                            
                            // Format the date as "YYYY-MM-DD"
                            const formattedDate = currentDate.toISOString().split('T')[0];
                            
                            // Set the value of the date inputs to the formatted date
                            document.getElementById("start").min = formattedDate;
                            document.getElementById("end").min = formattedDate;
                        </script>

                        <li>
                            <button id="search_button" name="search_button" type="submit" class="form-control-submit-button" style="height: 20%; margin-top: 15%; width: 60%; margin-left: 40%;">Αναζήτηση</button>
                        </li>
                    </form>
                </ul>
            </filter>
        
            <jobs>
                <?php 
                    include "../connection.php";
                    
                    $query = "SELECT * FROM ads WHERE published = 1 AND positions != 0";

                    if(!empty($_GET)){
                        /* get the values */
                        $search = $_GET['search1'];
                        $employment_type = $_GET['hours'];
                        $duration = $_GET['duration'];
                        $start_date = $_GET['trip-start'];
                        $end_date = $_GET['trip-end'];
                        $city = $_GET['city'];
                        $department = $_GET['department'];

                        /* Add the search term to the query, if it's not empty */
                        if (!empty($search)) {
                            $query .= " AND title LIKE '%$search%'";
                        }
                        
                        /* Add the employment type filter to the query, if it's not "" */
                        if ($employment_type != "") {
                            $query .= " AND type = '$employment_type'";
                        }
                        
                        /* Add the duration filter to the query, if it's not "" */
                        if ($duration != "") {
                            $query .= " AND duration = '$duration'";
                        }
                        /* Add the city filter to the query, if it's not "" */
                        if ($city != "") {
                            $query .= " AND location LIKE '%$city%'";
                            echo $duration." ";
                        }
                        /* Add the department filter to the query, if it's not "" */
                        if ($department != "") {
                            $query .= " AND departments = '$department'";
                            echo $duration." ";
                        }
                        if ($start_date != ""){
                            if($end_date != ""){
                                $query .= " AND start BETWEEN '$start_date' AND '$end_date' ";
                            }
                            else{
                                $query .= " AND start > '$start_date' ";
                            }
                        }
                        elseif ($end_date != ""){
                            $query .= " AND start < '$end_date' ";
                        }             
                    }
                    else if(isset($searchValue)){
                        $query = "SELECT * FROM ads WHERE published = 1 AND positions != 0 AND title LIKE '%$searchValue%' ";
                    }

                    if(isset($_GET['clear_filters'])){
                        $_GET = array();
                    }

                    $sql = mysqli_query($db, $query);
                    while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){ 
                ?>
                <ul class="joblist">
                    <li class="job">
                        <!-- individual job advertisment -->
                        <div class="job-card">
                            <div class="top-line">
                                <div class="zoom">
                                    <form method="POST" action="job-details.php">
                                    <input type="hidden" name="show-submit-application" value=1>
                                        <input type="hidden" name="ad-id" value="<?php echo $row['id']; ?>">
                                        <h3><button type="submit" name="show-details" class="job-title-button"> <?php echo $row['title']?> </button></h3>
                                    </form>
                                </div>
                            </div> 
                            <p><?php echo $row['departments']?></p>
                            <ul class="job-features">
                                <li><strong>Περιοχή:</strong> <?php echo $row['location']?> </li>
                                <li><strong>Τύπος απασχόλησης:</strong> <?php if($row['type'] == "part-time") { echo "Μερική Απασχόληση"; } else { echo "Πλήρης Απασχόληση"; }?> </li>
                                <li><strong>Ημερομηνία ανάρτησης:</strong> <?php echo $row['date']?> </li>
                                <li><strong>Διάρκεια:</strong> <?php echo $row['duration']?> μήνες </li>
                                <li><strong>Διαθέσιμες Θέσεις:</strong> <?php echo $row['positions']?> </li>
                                <li><strong>Ημερομηνία:</strong> <?php echo $row['start']. " με " . $row['end'] ?> </li>
                            </ul>
                        </div>
                        <!-- end of individual job advertisement-->
                    </li>
                </ul>
                <?php } ?>
            </jobs>
        </div>
        <!-- end of centered job advertisement board -->
    </body>
</html>