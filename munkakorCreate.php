<?php
include_once "header.php";
?>

<body>
    <div class="row">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class=" input-group input-group-sm mb-3 inputField">
                <span class="input-group-text" id="inputGroup-sizing-s">Munkakör</span>
                <input id="munkakorNev" name="munkakorNev" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s" placeholder="*Munkakorok" required>
            </div>
            <div class="mid">
                <button id="createWorkerBtn" type="submit" class="btn btn-primary">Mentés</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button id="megseBtn" type="reset" class="btn btn-primary">Mégse</button>
                <!-- gombok -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $sql = "SELECT MAX(munkakorID) FROM munkakorok";
                    $records = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($records) < 0) {
                        $ID = 1;
                    } else {
                        $row = mysqli_fetch_row($records);
                        $ID = $row[0] + 1;
                    }

                    $sqlInsert = "INSERT INTO munkakorok(munkakorID, munkakorNev) VALUES (?,?)";

                    $munkakorNev = $_POST["munkakorNev"];
                    if ($stmt = mysqli_prepare($conn, $sqlInsert)) {
                        mysqli_stmt_bind_param(
                            $stmt,
                            "is",
                            $param_munkakorID,
                            $param_munkakorNev
                        );
                        $param_munkakorID = (int)$ID;
                        $param_munkakorNev = $munkakorNev;


                        if (mysqli_stmt_execute($stmt)) {
                            include_once "sikeres.php";
                        } else {
                            include_once "errorMsg.php";
                        }
                        if (mysqli_stmt_close($stmt) == true) {
                        }
                    }
                }
                mysqli_close($conn);
                ?>
            </div>
        </form>
    </div>
</body>