<?php 
    session_start();

    include("connection.php");

   
    $_POST = json_decode(file_get_contents('php://input'), true);
    

    // insert the data into the database
    $query= "insert into students (fname, lname, latin_fname, latin_lname, phone, date_of_birth, university, school, department, am, email, password) values (?,?,?,?,?,?,?,?,?,?,?,?)";
    
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssssssssssss", $_POST["fname"],$_POST["lname"],$_POST["latin_fname"],$_POST["latin_lname"],$_POST["phone"],$_POST["date_of_birth"],$_POST["university"],$_POST["school"],$_POST["department"],$_POST["am"],$_POST["email"],$_POST["password"]);
    $result = $stmt->execute();

    if($result){
        echo "User has been added successfully";
    } else {
        echo "There was a problem adding the user.";
    }
    
?>