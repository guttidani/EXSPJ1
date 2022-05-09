<?php 
$id = $_GET["id"];
$sql_select = "SELECT * FROM dolgozok WHERE munkakorID =" . $id;
if (mysqli_num_rows(mysqli_query($conn, $sql_select)) < 1) {
    
}
?> 