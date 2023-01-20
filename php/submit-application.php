
<?php
    session_start();
    include "connection.php";
    /* add application to db with STATUS = SAVED */
    if (isset($_POST['save-application'])) {
        $id = $_SESSION['user']['id'];
        $sql = "INSERT INTO application(student_id, comments, grades, status, ad_id) VALUES('$id' , '"  .addslashes($_POST['comments'], ). "', NULL , 'saved', ".$_POST['ad-id']." )";
        $db->query($sql); ?>
        <script type="text/javascript">
            window.location = "http://localhost/sdi1900168/atlas/php/my-applications.php";
        </script> 
<?php } ?>

<?php
    /* add application to db with STATUS = COMPLETED */
    if (isset($_POST['submit-application'])) {
        $id = $_SESSION['user']['id'];
        $sql = "INSERT INTO application(student_id, comments, grades, status, ad_id) VALUES('$id' , '" .addslashes($_POST['comments'], ). "', NULL, 'completed',  ".$_POST['ad-id'].")";
        $db->query($sql); ?>
        <script type="text/javascript">
            window.location = "http://localhost/sdi1900168/atlas/php/my-applications.php";
        </script> 
<?php } ?>