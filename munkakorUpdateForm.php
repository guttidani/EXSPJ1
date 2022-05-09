<?php
include "connection.php";
include "header.php";

$id = $_GET["id"];
$sql_l = "SELECT * FROM munkakorok WHERE ID=" . $id;
$records_act = mysqli_query($conn, $sql_l);
$row_act = mysqli_fetch_row($records_act);
$munkakorID = $row_act[1];
$munkakorNev = $row_act[2];
?>

<body>
    <form action="munkakorUpdate.php" method="post">
        <div class=" input-group input-group-sm mb-3 inputField">
            <span class="input-group-text" id="inputGroup-sizing-s">Vezetéknév</span>
            <input id="munkakorNev" name="munkakorNev" type="text" value="<?php echo $munkakorNev ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s" required>
        </div>
        <div class="mid">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <button id="updateWorkerBtn" type="submit" class="btn btn-primary" disabled>Mentés</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button id="megseBtn" type="reset" class="btn btn-primary">Mégse</button>
            <!-- gombok -->
            <br>
        </div>
    </form>
</body>


<?php
include "footer.php";
?>