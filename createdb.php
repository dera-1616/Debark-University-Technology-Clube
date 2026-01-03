<?php
require "connection.php";
$sql="create database Techonology";
if(mysqli_query($conn,$sql)){
    echo"Database created successfully";
} else{
    echo"Error creating database:".mysqli_error($conn);
}
mysqli_close($conn);
?>