<?php
include "connection.php";

$id = $_POST["id"];
$szervEgysNev = $_POST["szervEgysNev"];

$sql_select = "SELECT * FROM dolgozok WHERE szervegysID =" . $id;
$sql_update = 'UPDATE szervegys SET
szervegysID ='.$id.',
szervEgysNev= "' . $szervEgysNev . '"
WHERE szervegysID=' . $id;
if (mysqli_num_rows(mysqli_query($conn, $sql_select)) < 1) {
    if (mysqli_query($conn, $sql_update)) {
        header("location:/szervegysList.php");
    } else {
        mysqli_error($conn);
        include "header.php";
        include "errorMsg.php";
    }
}