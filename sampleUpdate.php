<?php
include "connection.php";
$id = 4;
$vezetekNev2 = "Gáspár";
$keresztNev2 = "Győző";
$munkakorID2 = 11;
$szervEgysID2 = 11;
$bruttoBer2 = 1111;
$adoazonosito2 = "1111";
$TAJ2 = "1111";
$bankszamlaszam2 = "1111";
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
    //include "sikeres.php";
    header("location:/index.php");
} else {
    mysqli_error($conn);
    include "errorMsg.php";
}
