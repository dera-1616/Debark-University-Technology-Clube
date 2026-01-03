<?php
require "connection.php";

if (isset($_POST['submit'])) {
    
    $fname = $_POST['name']; 
    $lname = $_POST['last_name'];
    $sid   = $_POST['student_id'];
    $dept  = $_POST['department'];
    $year  = $_POST['year_of_study'];

    $sql = "INSERT INTO techono_member (firstname, lastname, student_id, dept, study_year) 
            VALUES ('$fname', '$lname', '$sid', '$dept', '$year')";
    ?>
    <script src="script.js"></script>
    <?php

    if (mysqli_query($conn, $sql)) {
       
        echo "<script>showSuccessMessage();</script>";
    } else {
        
        $errorMsg = mysqli_error($conn);
        echo "<script>showErrorMessage('$errorMsg');</script>";
    }
}

mysqli_close($conn);
?>