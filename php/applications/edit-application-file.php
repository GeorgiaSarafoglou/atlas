<?php
    session_start();
    include "../connection.php";
    /* add application to db with STATUS = SAVED */
    $id = $_POST['application-id'];
    $comments = $_POST['comments'];
if (isset($_POST['save-application-edit'])) {
    if ($_FILES['updatefile']['size'] == 0) {
        $id = $_SESSION['user']['id'];
        $sql = "UPDATE application SET status = 'Μη-υποβεβλημένη', comments = '$comments'  WHERE application_id = $id ";
        $db->query($sql);
        header("location:saved-applications.php");
    } else {
        #file information
        $file = $_FILES['updatefile'];
        $fileName = $_FILES['updatefile']['name'];
        $fileTmpName = $_FILES['updatefile']['tmp_name'];
        $fileSize = $_FILES['updatefile']['size'];
        $fileError = $_FILES['updatefile']['error'];
        $fileType = $_FILES['updatefile']['type'];

        #accept only pdfs
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('pdf'); #files we allow into database

        if (in_array($fileActualExt, $allowed)) {
            #add file in database.
            if ($fileError === 0) {
                #no errors on upload
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDest = '../../uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDest);
            } else {
                echo "Error while uploading file";
            }
        } else {
            echo "File type must be a .pdf";
        }

        $sql = "UPDATE application SET status = 'Μη-υποβεβλημένη', comments = '$comments', grades = '$fileNameNew'  WHERE application_id = $id ";
        $db->query($sql);
        header("location:saved-applications.php");
 }
}
    $id = $_POST['application-id'];
    $comments = $_POST['comments'];
    /* add application to db with STATUS = COMPLETED */
    if (isset($_POST['submit-application-edit'])) {

        #get application
        $sql_app = "SELECT * FROM application WHERE application_id = $id ";
        $result_app = mysqli_query($db, $sql_app);
        $app = mysqli_fetch_assoc($result_app);

        if ($app['grades'] == NULL) {
            #file information
            $file = $_FILES['updatefile'];
            $fileName = $_FILES['updatefile']['name'];
            $fileTmpName = $_FILES['updatefile']['tmp_name'];
            $fileSize = $_FILES['updatefile']['size'];
            $fileError = $_FILES['updatefile']['error'];
            $fileType = $_FILES['updatefile']['type'];

            #accept only pdfs
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('pdf'); #files we allow into database

            if (in_array($fileActualExt, $allowed)) {
                #add file in database.
                if ($fileError === 0) {
                    #no errors on upload
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDest = '../../uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDest);

                } else {
                    echo "Error while uploading file";
                }


            } else {
                echo "File type must be a .pdf";
            }

            $sql = "UPDATE application SET status = 'Εκκρεμής', comments = '$comments', grades = '$fileNameNew' WHERE application_id = $id ";
            $db->query($sql);

        }else{
            $sql = "UPDATE application SET status = 'Εκκρεμής', comments = '$comments' WHERE application_id = $id ";
            $db->query($sql);
        }

        #insert notification for company

        $sql_com = "SELECT * FROM ads WHERE id = " . $app['ad_id'] . " ";
        $result_ad = mysqli_query($db, $sql_com);
        $ad = mysqli_fetch_assoc($result_ad);
        $application_id = $id;
        $company_id = $ad['company_id'];


        $false = 0;
        $sql_not = "INSERT INTO company_notifications(company_id, application_id, is_read) VALUES('$company_id', '$application_id', '$false')";
        $db->query($sql_not);
            
        ?>
        <script type="text/javascript">
            window.location = "http://localhost/sdi1900168/atlas/php/applications/pending-applications.php";
        </script> 

<?php }

?>