<?php
    session_start();
    include "connection.php";
    /* add application to db with STATUS = SAVED */
    $id = $_POST['application-id'];
    $comments = $_POST['comments'];
    if (isset($_POST['save-application-edit'])) {
        $sql = "UPDATE application SET status = 'Μη-υποβεβλημένη', comments = '$comments'  WHERE application_id = $id ";
        $db->query($sql); ?>
        <script type="text/javascript">
            window.location = "http://localhost/sdi1900168/atlas/php/my-applications.php";
        </script> 
<?php }
    $id = $_POST['application-id'];
    $comments = $_POST['comments'];
    /* add application to db with STATUS = COMPLETED */
    if (isset($_POST['submit-application-edit'])) {
        $sql = "UPDATE application SET status = 'Εκκρεμής', comments = '$comments' WHERE application_id = $id ";
        $db->query($sql); ?>
        <script type="text/javascript">
            window.location = "http://localhost/sdi1900168/atlas/php/my-applications.php";
        </script> 
<?php } ?>
