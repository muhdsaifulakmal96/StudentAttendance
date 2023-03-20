<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_db"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed failed to connect database: " . mysqli_connect_error());
}
//echo "Connected successfully";
