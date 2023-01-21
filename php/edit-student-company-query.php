<?php
    session_start();
    include "connection.php";

    $id = $_SESSION['user']['id'];
    if (isset($_POST['change-student-details'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $latin_fname = $_POST['latin_fname'];
    $latin_lname = $_POST['latin_lname'];
    $phone = $_POST['phone'];
    $university = $_POST['university'];
    $department = $_POST['department'];
    $school = $_POST['school'];
    $am = $_POST['am'];

    $sql = "UPDATE students SET fname = '$fname', lname = '$lname', latin_fname = '$latin_fname', latin_lname = '$latin_lname',
    phone = '$phone', university = '$university', department = '$department', school = '$school', am ='$am'  WHERE id = $id ";
    $db->query($sql);
    header("location: edit-student.php");
 }else if(isset($_POST['change-company-details'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $latin_fname = $_POST['latin_fname'];
    $latin_lname = $_POST['latin_lname'];
    $phone = $_POST['phone'];
    $company_name = $_POST['company_name'];
    $company_phone = $_POST['company_phone'];
    $afm = $_POST['afm'];
    $doy = $_POST['doy'];
    $country = $_POST['country'];
    $street = $_POST['street'];
    $tk = $_POST['tk'];
    $region = $_POST['region'];
    $email = $_POST['email'];

    $sql = "UPDATE company SET fname = '$fname', lname = '$lname', latin_fname = '$latin_fname', latin_lname = '$latin_lname',
    phone = '$phone', afm = '$afm', doy = '$doy', country = '$country', street = '$street', tk = '$tk', region = '$region', email = '$email'  WHERE id = $id ";

    $db->query($sql);
    header("location: edit-company.php");

 }
 
 
 
 
 
 
 ?>