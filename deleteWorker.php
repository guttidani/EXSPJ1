<?php 

include "connection.php";

$id = $_GET["id"];

$del = mysqli_query($conn, 'DELETE FROM dolgozok WHERE ID=' . $id);

if($conn){
    mysqli_close($conn);
    header("location:index.php");
    exit;
}
else
{
    echo "Error deleting record";
    echo $id;
}

?>