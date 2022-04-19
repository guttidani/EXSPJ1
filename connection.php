<?php
$servername = "localhost";
$username = "exspj1";
$password = "betu123";
$dbname = "exspj1";


// Create connection
//$conn = new mysqli($servername, $username, $password,$dbname);
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  error_log("Connection failed", 0);
}
error_log("Connection succesful", 0);
?>