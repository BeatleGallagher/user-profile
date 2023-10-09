<?php


// Database configuration
$db_host = 'localhost'; // Replace with your database host
$db_name = 'userprofilecard'; // Replace with your database name
$db_user = 'root'; // Replace with your MySQL username
$db_password = ''; // Replace with your MySQL password
//$charset = 'utf8mb4'; // Character encoding (optional)

$mysqli = mysqli_connect($db_host,$db_user,$db_password,$db_name);
    if($mysqli->connect_errno){
        return $conn;
        header('location:index.php');
        
    } 

?>
