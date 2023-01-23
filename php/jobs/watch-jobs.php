<?php 
    session_start();

    if(!isset($_SESSION['user'])){
        header("location: ../../index.php");
    }
    
    $id = $_SESSION['user']['id'];

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

        <?php include "../office-menu.php" ?>
        </div>
        <div class="container" style="position: relative; width:100%; margin-top:-1%;">
            <div class="card" style="border-width: 2px; width:110%;">
                <h4 style="margin-left: 40%;">Όλες οι Αγγελίες</h4>
            </div>
        </div>
        <div class="row" style="width: 100%;">
        
        <div class="main-box" style="margin-left: 10%; width:100%; background-color: transparent;border:none;">
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
                                <label class="label-control" for="search1">Αναζήτηση</label>
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
                            <label for="start">Από:</label>
                            <input type="date" id="start" name="trip-start"
                                value="2023-01-01"
                                min="2023-01-01" max="2024-12-31">
                        </li>
                        <li>
                            <label for="end">Εώς:</label>
                            <input type="date" id="end" name="trip-end"
                                value="2025-01-01"
                                min="2023-01-01" max="2025-01-01">
                        </li>
                        <li>
                            <button id="search_button" name="search_button" type="submit" class="form-control-submit-button" style="height: 20%; margin-top: 15%; width: 60%; margin-left: 40%;">Αναζήτηση</button>
                        </li>
                    </form>
                </ul>
            </filter>
        
            <jobs>
                <?php 
                    include "../connection.php";
                    
                    $query = "SELECT * FROM ads WHERE company_id = '$id' " ;

                    if(!empty($_GET)){
                        /* get the values */
                        $search = $_GET['search1'];
                        $employment_type = $_GET['hours'];
                        $duration = $_GET['duration'];
                        $start_date = $_GET['trip-start'];
                        $end_date = $_GET['trip-end'];
                        $city = $_GET['city'];
                        /* Add the search term to the query, if it's not empty */
                        if (!empty($search)) {
                            $query .= " AND title LIKE '%$search%'";
                            echo $search." ";
                        }
                        
                        /* Add the employment type filter to the query, if it's not "" */
                        if ($employment_type != "") {
                            $query .= " AND type = '$employment_type'";
                            echo $employment_type." ";
                        }
                        
                        /* Add the duration filter to the query, if it's not "" */
                        if ($duration != "") {
                            $query .= " AND duration = '$duration'";
                            echo $duration." ";
                        }

                        if($start_date != ""){
                            $query .= " AND start >= '$start_date'";
                            echo $start_date."-";
                        }

                        if($end_date != ""){
                            $query .= " AND start <= '$end_date'";
                            echo $end_date;
                        }
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
                                <form method="POST" action="job-details.php">
                                <input type="hidden" name="show-submit-application" value=1>
                                    <input type="hidden" name="ad-id" value="<?php echo $row['id']; ?>">
                                    <div class="zoom"><h3><button type="submit" name="show-details" class="job-title-button"> <?php echo $row['title']?> </button></h3></div>
                                </form>
                            </div> 
                            <p><?php if($row['departments'] == "ekpa") { echo "ΕΚΠΑ"; } elseif ($row['departments'] == "assoe"){ echo "ΑΣΣΟΕ"; } else { echo "ΠΑΠΕΙ"; }?></p>
                            <ul class="job-features">
                                <li><strong>Περιοχή:</strong> <?php echo $row['location']?> </li>
                                <li><strong>Τύπος απασχόλησης:</strong> <?php if($row['type'] == "part-time") { echo "Μερική Απασχόληση"; } else { echo "Πλήρης Απασχόληση"; }?> </li>
                                <li><strong>Ημερομηνία ανάρτησης:</strong> <?php echo $row['date']?> </li>
                                <li><strong>Διάρκεια:</strong> <?php echo $row['duration']?> </li>
                                <li><strong>Διαθέσιμες θέσεις:</strong> <?php echo $row['positions']?> </li>
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