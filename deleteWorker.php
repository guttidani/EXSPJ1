<?php 
$delete_sql = 'DELETE FROM dolgozok WHERE ID = $row["ID"]';
$delete_query = mysqli_query($conn,$delete_sql);
?>
