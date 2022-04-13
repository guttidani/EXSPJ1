<?php
$servername = "localhost";
$username = "exspj1";
$password = "betu123";
$dbname = "myDB";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  error_log("Connection failed", 0);
}
error_log("Connection succesful", 0);
?>