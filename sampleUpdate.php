<?php
include "connection.php";
$vezetekNev2 = $_GET["vezetekNev"];
$keresztNev2 = $_GET["keresztNev"];
$munkakorID2 = $_GET["munkakorID"];
$szervEgysID2 = $_GET["szervEgysID"];
$bruttoBer2 = $_GET["bruttoBer"];
$adoazonosito2 = $_GET["adoazonosito"];
$TAJ2 = $_GET["TAJ"];
$bankszamlaszam2 = $_GET["bankszamlaszam"];
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
    include "sikeres.php";
    header("location:/index.php");
} else {
    mysqli_error($conn);
    include "errorMsg.php";
}
