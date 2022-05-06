<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dolgozó felvétele</title>
</head>

<?php
include_once "header.php";
?>

<body>
    <div class="container-l">
        <div class="row">
            <div class="container-xl col">
                <!-- input form -->
                <form id="createWorkerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div id="errorShowDiv"></div>
                    <div>
                        <div class="mid" style="font-size: 30px;">Dolgozó szerkesztése </div><br>
                        <!-- név -->
                        <div>
                            <div class=" input-group input-group-sm mb-3 inputField">
                                <span class="input-group-text" id="inputGroup-sizing-s">Vezetéknév</span>
                                <input id="vezetekNev" name="vezetekNev" type="text" class="form-control" onchange="submitSetEnable()"   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s" placeholder="*Kovács" required>
                            </div>
                            <div class="input-group input-group-sm mb-3 inputField">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Keresztnév</span>
                                <input id="keresztNev" name="keresztNev" type="text" class="form-control" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="*István" required>
                            </div>
                        </div>
                        <!-- munkakorok dropdowns -->
                        <div class="dropdown inputField">
                            <select class="form-select" aria-label="Default select example" id="munkakorID" name="munkakorID" onchange="submitSetEnable()" required>
                                <option value=0 selected>Munkakörök</option>
                                <?php
                                $sql = "SELECT * FROM munkakorok";
                                $records = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($records) > 0) {
                                    while ($row = mysqli_fetch_assoc($records)) {
                                        echo '<option class="dropdown-item" value="', $row["munkakorID"], '">', $row["munkakorNev"], '</option>';
                                    }
                                } else {
                                    echo "0 results ";
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <!-- szervegyseg dropdowns -->
                        <div class="dropdown inputField">
                            <select class="form-select" aria-label="Default select example" id="szervEgysID" name="szervEgysID" onchange="submitSetEnable()" required>
                                <option value=0 selected>Szervezeti egységek</option>
                                <?php
                                $sql = "SELECT * FROM szervegys";
                                $records = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($records) > 0) {
                                    while ($row = mysqli_fetch_assoc($records)) {
                                        echo '<option class="dropdown-item" value="', $row["szervegysID"], '">', $row["szervEgysNev"], '</option>';
                                    }
                                } else {
                                    echo "0 results ";
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <!-- Bruttóbér -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Bruttóbér</span>
                            <input id="bruttoBer" maxlength="9" name="bruttoBer" type="text" class="form-control noSpinner" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="123 456 Ft/hónap*" required>
                        </div>
                        <!-- adóazonosító -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Adóazonosító</span>
                            <input id="adoazonosito" name="adoazonosito" type="text" class="form-control noSpinner" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="10" maxlength="10" placeholder="0123456789*" required>
                        </div>
                        <!-- TAJ -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">TAJ szám</span>
                            <input id="TAJ" name="TAJ" type="text" class="form-control noSpinner" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="9" maxlength="9" placeholder="123 456 789*" required>
                        </div>
                        <!-- Bankszámlaszám -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Bankszámla szám</span>
                            <input id="bankszamlaszam" name="bankszamlaszam" type="text" class="form-control noSpinner" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="24" maxlength="24" placeholder="00001111-22223333-44445555*" required>
                        </div>
                        <br>
                        <!-- gombok -->
                        <div class="mid">
                            <button id="createWorkerBtn" type="submit" class="btn btn-primary" disabled>Mentés</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button id="megseBtn" type="reset" class="btn btn-primary">Mégse</button>
                            <!-- gombok -->

                            <br>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $sql = "SELECT MAX(ID) FROM dolgozok";
                                $records = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($records) < 0) {
                                    $ID = 1;
                                } else {
                                    $row = mysqli_fetch_row($records);
                                    $ID = $row[0] + 1;
                                }

                                $sqlInsert = "INSERT INTO dolgozok(ID, vezetekNev, keresztNev, munkakorID, szervEgysID, bruttoBer, adoazonosito, TAJ, bankSzamla) 
                                    VALUES (?,?,?,?,?,?,?,?,?)";

                                $vezetekNev = $_POST["vezetekNev"];
                                $keresztNev = $_POST["keresztNev"];
                                $munkakorID = $_POST["munkakorID"];
                                $szervEgysID = $_POST["szervEgysID"];
                                $bruttoBer = $_POST["bruttoBer"];
                                $adoazonosito = $_POST["adoazonosito"];
                                $TAJ = $_POST["TAJ"];
                                $bankszamlaszam = $_POST["bankszamlaszam"];
                                $szerv_dropdown = "Szervezeti egységek";
                                $munkakor_dropdown = "Munkakörök";

                                if ($stmt = mysqli_prepare($conn, $sqlInsert)) {
                                    //echo "mysqli_prepare";
                                    // bind variables to the prepered statement as paramaters
                                    mysqli_stmt_bind_param(
                                        $stmt,
                                        "issiiisss",
                                        $param_ID,
                                        $param_vezetekNev,
                                        $param_keresztNev,
                                        $param_munkakorID,
                                        $param_szervEgysID,
                                        $param_bruttoBer,
                                        $param_adoazonosito,
                                        $param_TAJ,
                                        $param_bankszamlaszam
                                    );
                                    //set parameters
                                    $param_ID = (int)$ID;
                                    $param_vezetekNev = $vezetekNev;
                                    $param_keresztNev = $keresztNev;
                                    $param_munkakorID = (int)$munkakorID;
                                    $param_szervEgysID = (int)$szervEgysID;
                                    $param_bruttoBer = (int)$bruttoBer;
                                    $param_adoazonosito = $adoazonosito;
                                    $param_TAJ = $TAJ;
                                    $param_bankszamlaszam = $bankszamlaszam;

                                    if (mysqli_stmt_execute($stmt)) {
                                        //echo "Sikeresen létrejött a Dolgozó";
                                        include_once "sikeres.php";
                                    } else {
                                        include_once "errorMsg.php";
                                    }
                                    if(mysqli_stmt_close($stmt) == true){
                                    }
                                }
                            }
                            mysqli_close($conn);
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php 
include_once "footer.php";
?>
<!-- Optional JavaScript; choose one of the two ! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->

</html>