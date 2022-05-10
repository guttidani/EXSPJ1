<?php
include "connection.php";
include "header.php";

$id = $_GET["id"];
$munkakorNev = "";
$sql_select = "SELECT * FROM dolgozok WHERE munkakorID =" . $id;
if (mysqli_num_rows(mysqli_query($conn, $sql_select)) < 1) {
    $sql_l = "SELECT * FROM munkakorok WHERE munkakorID=" . $id;
    $records_act = mysqli_query($conn, $sql_l);
    $row_act = mysqli_fetch_row($records_act);

    $munkakorID = $row_act[0];
    $munkakorNev = $row_act[1];
} else {
    include "errorMsg.php";
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Munkakör modositasa</title>
</head>


<body>
    <h2 class="mid">Munkakör modositasa</h2>
    <div class="mid">
        <form action="munkakorUpdate.php" method="post">
            <div class=" input-group input-group-sm mb-3 inputField">
                <span class="input-group-text" id="inputGroup-sizing-s">Munkakör</span>
                <input id="munkakorNev" name="munkakorNev" type="text" value="<?php echo $munkakorNev ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s" required>
            </div>
            <!-- gombok -->
            <div class="mid">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button id="updateWorkerBtn" type="submit" class="btn btn-primary">Mentés</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button id="megseBtn" type="reset" class="btn btn-primary">Mégse</button>
                <!-- gombok -->
                <br>
            </div>
        </form>
    </div>
</body>