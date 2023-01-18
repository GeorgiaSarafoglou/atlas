<?php

    session_start();

    if(isset($_SESSION['user'])){
        if($_SESSION['user']['role'] == 'company'){
            $company_id = $_SESSION['user']['id'];
        }
        else{
            header("location: ../index.php");
        }
    }

    /* filter variables */
    $title = $_POST["title"];
    $subject = $_POST["subject"];
    $position_available = filter_input(INPUT_POST, "positions_available", FILTER_VALIDATE_INT);
    $duration = filter_input(INPUT_POST, "duration", FILTER_VALIDATE_INT);
    $departments = $_POST["departments"];
    $type = $_POST["type"];
    $location = $_POST["location"];
    $payment = filter_input(INPUT_POST, "payment", FILTER_VALIDATE_INT);
    $time_period_start = $_POST["time_period_start"];
    $time_period_end = $_POST["time_period_end"];
    $description = $_POST["description"];
    $insurance = $_POST["insurance"];
    $infastructures = $_POST["infrastructure"];
    $published = true;

    require_once "connection.php";

    $query = "insert into ads (title, subject, positions, duration, departments, type, location, start, end, payment, description, insurance, infrastructure, published, company_id)
    values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $db->prepare($query);
    $stmt->bind_param("ssiisssisssssii", $title, $subject, $position_available, $duration, $departments, $type, $location, 
    $payment, $time_period_start, $time_period_end, $description, $insurance, $infastructures, $published, $company_id);
    $result = $stmt->execute();

    /* if it is added in table we return to starting page */
    if($result){
        header("location: ../index.php");
    }
    else{
        echo "There was a problem adding the ad\n";
    }
