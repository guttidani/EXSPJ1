<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Szervezetiegység modositasa</title>
</head>

<?php
include "connection.php";
include "header.php";

$id = $_GET["id"];
$szervEgysNev = "";
$sql_select = "SELECT * FROM dolgozok WHERE szervegysID =" . $id;
if (mysqli_num_rows(mysqli_query($conn, $sql_select)) < 1) {
    $sql_l = "SELECT * FROM szervegys WHERE szervegysID=" . $id;
    $records_act = mysqli_query($conn, $sql_l);
    $row_act = mysqli_fetch_row($records_act);

    $szervEgysID = $row_act[0];
    $szervEgysNev = $row_act[1];
} else {
    include "errorMsg.php";
}

?>

<body>
    <h2 class="mid">Szervezetiegység modositasa</h2>
    <div class="mid">
        <form action="szervegysUpdate.php" method="post">
            <div class=" input-group input-group-sm mb-3 inputField">
                <span class="input-group-text" id="inputGroup-sizing-s">Szervezetiegység</span>
                <input id="szervEgysNev" name="szervEgysNev" type="text" value="<?php echo $szervEgysNev ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s" required>
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