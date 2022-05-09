<?php
include "connection.php";

$id = $_POST["id"];
$munkakorNev = $_POST["munkakorNev"];

$sql_select = "SELECT * FROM dolgozok WHERE munkakorID =" . $id;
$sql_update = 'UPDATE munkakorok SET
munkakorID ='.$id.',
munkakorNev="' . $munkakorNev . '"
WHERE munkakorID=' . $id;
if (mysqli_num_rows(mysqli_query($conn, $sql_select)) < 1) {
    if (mysqli_query($conn, $sql_update)) {
        header("location:/munkakorList.php");
    } else {
        mysqli_error($conn);
        include "header.php";
        include "errorMsg.php";
    }
}