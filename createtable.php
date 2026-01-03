<?php
require "connection.php";

$sql = "CREATE TABLE techono_member (
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    student_id VARCHAR(30) NOT NULL PRIMARY KEY,
    dept VARCHAR(50),
    study_year VARCHAR(10),
    regdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'techono_member' created successfully!";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>