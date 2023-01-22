
<?php
    session_start();
    include "connection.php";
    /* add application to db with STATUS = SAVED */
    if (isset($_POST['save-application'])) {
    if ($_FILES['myfile']['size'] == 0) {
        $id = $_SESSION['user']['id'];
        $sql = "INSERT INTO application(student_id, comments, grades, status, ad_id, date) VALUES('$id' , '" . addslashes($_POST['comments'], ) . "', NULL , 'Μη-υποβεβλημένη', " . $_POST['ad-id'] . ", '".date("Y-m-d")."')";
        $db->query($sql);
    }else{
        #file information
        $file = $_FILES['myfile'];
        $fileName = $_FILES['myfile']['name'];
        $fileTmpName = $_FILES['myfile']['tmp_name'];
        $fileSize = $_FILES['myfile']['size'];
        $fileError = $_FILES['myfile']['error'];
        $fileType = $_FILES['myfile']['type'];

        #accept only pdfs
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('pdf');         #files we allow into database
        
        if(in_array($fileActualExt, $allowed)){
            #add file in database.
            if($fileError === 0){
                #no errors on upload
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDest = '../uploads/'. $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDest);
            }else{
                echo "Error while uploading file";
            }
        }else{
            echo "File type must be a .pdf";
        }  

        $id = $_SESSION['user']['id'];
        $sql = "INSERT INTO application(student_id, comments, grades, status, ad_id, date) VALUES('$id' , '" . addslashes($_POST['comments'], ) . "', '$fileNameNew' , 'Μη-υποβεβλημένη', " . $_POST['ad-id'] . ", '".date("Y-m-d")."' )";
        $db->query($sql);
    }  
        ?>
        <script type="text/javascript">
          window.location = "http://localhost/sdi1900168/atlas/php/saved-applications.php";
        </script> 
<?php } ?>

<?php
    /* add application to db with STATUS = COMPLETED */
    if (isset($_POST['submit-application'])) {

        #file information
        $file = $_FILES['myfile'];
        $fileName = $_FILES['myfile']['name'];
        $fileTmpName = $_FILES['myfile']['tmp_name'];
        $fileSize = $_FILES['myfile']['size'];
        $fileError = $_FILES['myfile']['error'];
        $fileType = $_FILES['myfile']['type'];

        #accept only pdfs
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('pdf');         #files we allow into database
        
        if(in_array($fileActualExt, $allowed)){
            #add file in database.
            if($fileError === 0){
                #no errors on upload
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDest = '../uploads/'. $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDest);

            }else{
                echo "Error while uploading file";
            }


        }else{
            echo "File type must be a .pdf";
        }

        $id = $_SESSION['user']['id'];
        $sql = "INSERT INTO application(student_id, comments, grades, status, ad_id, date) VALUES('$id' , '" .addslashes($_POST['comments'], ). "', '$fileNameNew ', 'Εκκρεμής',  ".$_POST['ad-id'].", '".date("Y-m-d")."')";
        $db->query($sql);
        
        $application_id = mysqli_insert_id($db);
        #insert notification for company
        $sql_com = "SELECT * FROM ads WHERE id = " . $_POST['ad-id'] . "; ";
        $result_ad = mysqli_query($db, $sql_com);
        $ad = mysqli_fetch_assoc($result_ad);

        $company_id = $ad['company_id'];


        $false = 0;
        $sql_not = "INSERT INTO company_notifications(company_id, application_id, is_read) VALUES('$company_id', '$application_id', '$false')";
        $db->query($sql_not);
        
        ?>
        <script type="text/javascript">
            window.location = "http://localhost/sdi1900168/atlas/php/pending-applications.php";
        </script> 
<?php } ?>