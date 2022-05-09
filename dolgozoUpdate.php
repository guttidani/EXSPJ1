<?php
include "connection.php";
$id = $_POST["id"];
$vezetekNev2 = $_POST["vezetekNev"];
$keresztNev2 = $_POST["keresztNev"];
$munkakorID2 = $_POST["munkakorID"];
$szervEgysID2 = $_POST["szervEgysID"];
$bruttoBer2 = $_POST["bruttoBer"];
$adoazonosito2 = $_POST["adoazonosito"];
$TAJ2 = $_POST["TAJ"];
$bankszamlaszam2 = $_POST["bankszamlaszam"];
$sql_update = 'UPDATE dolgozok SET 
    ID = ' . $id . ',
    vezetekNev= "' . $vezetekNev2 . '",
    keresztNev="' . $keresztNev2 . '",
    munkakorID=' . $munkakorID2 . ',
    szervEgysID=' . $szervEgysID2 . ',
    bruttoBer=' . $bruttoBer2 . ',
    adoazonosito="' . $adoazonosito2 . '",
    TAJ="' . $TAJ2 . '",
    bankSzamla="' . $bankszamlaszam2 . '"
    WHERE ID =' . $id;
if (mysqli_query($conn, $sql_update)) {
    header("location:/index.php");
} else {
    mysqli_error($conn);
    include "header.php";
    include "errorMsg.php";
}
