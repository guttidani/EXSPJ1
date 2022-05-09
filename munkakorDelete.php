<?php

include "connection.php";

$id = $_GET["id"];
$sql_delete = 'DELETE FROM munkakorok WHERE munkakorID=' . $id;
$sql_select = "SELECT * FROM dolgozok WHERE munkakorID =" . $id;
if (mysqli_num_rows(mysqli_query($conn, $sql_select)) < 1) {
    mysqli_query($conn, $sql_delete);
} else {
    echo "Nem lehet törölni";
}

if ($conn) {
    mysqli_close($conn);
    header("location:munkakorList.php");
    exit;
} else {
    echo "Error deleting record";
    echo $id;
}
