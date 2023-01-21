
<?php
    session_start();
    include "connection.php";
    /* add application to db with STATUS = SAVED */
    if (isset($_POST['save-application'])) {
    if (!isset($_POST['myfile'])) {

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
          window.location = "http://localhost/sdi1900168/atlas/php/my-applications.php";
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
        $db->query($sql); ?>
        <script type="text/javascript">
            window.location = "http://localhost/sdi1900168/atlas/php/my-applications.php";
        </script> 
<?php } ?>