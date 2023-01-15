<?php 
    session_start();

    include("connection.php");

   
    $_POST = json_decode(file_get_contents('php://input'), true);
    

    // insert the data into the database
    $query= "insert into company (fname, lname, latin_fname, latin_lname, phone, date_of_birth, type, field, company_name, company_phone, afm, doy, company_email, country, street, tk, region, municipality, email, password)
     values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssssssssssssssssssss", $_POST["fname"],$_POST["lname"],$_POST["latin_fname"],$_POST["latin_lname"],$_POST["phone"],$_POST["date_of_birth"],$_POST["type"],
        $_POST["field"],$_POST["company_name"],$_POST["company_phone"],$_POST["afm"],$_POST["doy"], $_POST["company_email"], $_POST["country"], $_POST["street"], $_POST["tk"],
        $_POST["region"], $_POST["municipality"], $_POST["email"],$_POST["password"]);

    $result = $stmt->execute();

    if($result){
        echo "User has been added successfully";
    } else {
        echo "There was a problem adding the user.";
    }
    
?>