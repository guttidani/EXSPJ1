<?php
include "header.php";
include "connection.php";
$id = $_GET["id"];

$sql_l = "SELECT * FROM dolgozok WHERE ID=" . $id;
$records_act = mysqli_query($conn, $sql_l);
$row_act = mysqli_fetch_row($records_act);

$vezetekNev = $row_act[1];
$keresztNev = $row_act[2];
$munkakorID = $row_act[3];
$szervEgysID = $row_act[4];
$bruttoBer = $row_act[5];
$adoazonosito = $row_act[6];
$TAJ = $row_act[7];
$bankszamlaszam = $row_act[8];
$szerv_dropdown = "Szervezeti egységek";
$munkakor_dropdown = "Munkakörök";

?>

<body>
    <div class="w-auto">
        <!-- idejöhet a form -->
        <form action="dolgozoUpdate.php" method="post">
            <div id="errorShowDiv"></div>
            <div>
                <div class="mid" style="font-size: 30px;">Dolgozó módosítás </div><br>
                <div class="mid">A csillaggal jelölt mezőket kötelező kitölteni</div><br>
                <!-- név -->
                <div>
                    <div class=" input-group input-group-sm mb-3 inputField">
                        <span class="input-group-text" id="inputGroup-sizing-s">Vezetéknév</span>
                        <input id="vezetekNev" name="vezetekNev" type="text" value="<?php echo $vezetekNev ?>" class="form-control" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s" required>
                    </div>
                    <div class="input-group input-group-sm mb-3 inputField">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Keresztnév</span>
                        <input id="keresztNev" name="keresztNev" type="text" value="<?php echo $keresztNev ?>" class="form-control" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                    </div>
                </div>
                <!-- munkakorok dropdowns -->
                <div class="dropdown inputField">
                    <select class="form-select" aria-label="Default select example" id="munkakorID" name="munkakorID" onchange="submitSetEnable()" required>
                        <?php
                        $sql_selectM = "SELECT * FROM munkakorok WHERE munkakorID=" . $munkakorID;
                        $result_munkakor = mysqli_query($conn, $sql_selectM);
                        $row_munkakor = mysqli_fetch_row($result_munkakor);
                        ?>
                        <option value="<?php echo $row_munkakor[0] ?>"> <?php echo $row_munkakor[1] ?> </option>
                        <?php
                        $sql_m = "SELECT * FROM munkakorok";
                        $records_m = mysqli_query($conn, $sql_m);

                        if (mysqli_num_rows($records_m) > 0) {
                            while ($row_m = mysqli_fetch_assoc($records_m)) {
                                echo '<option class="dropdown-item" value="', $row_m["munkakorID"], '">', $row_m["munkakorNev"], '</option>';
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
                        <?php
                        $sql_selectSz = "SELECT * FROM szervegys WHERE szervegysID=" . $szervEgysID;
                        $result_szerv = mysqli_query($conn, $sql_selectSz);
                        $row_szervegys = mysqli_fetch_row($result_szerv);
                        ?>

                        <option value="<?php echo $row_szervegys[0] ?>" selected><?php echo $row_szervegys[1] ?></option>
                        <?php
                        $sql_s = "SELECT * FROM szervegys";
                        $records_s = mysqli_query($conn, $sql_s);

                        if (mysqli_num_rows($records_s) > 0) {
                            while ($row_s = mysqli_fetch_assoc($records_s)) {
                                echo '<option class="dropdown-item" value="', $row_s["szervegysID"], '">', $row_s["szervEgysNev"], '</option>';
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
                    <input id="bruttoBer" maxlength="9" name="bruttoBer" type="text" value="<?php echo $bruttoBer ?>" class="form-control noSpinner" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <!-- adóazonosító -->
                <div class="input-group input-group-sm mb-3 inputField">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Adóazonosító</span>
                    <input id="adoazonosito" name="adoazonosito" type="text" value="<?php echo $adoazonosito ?>" class="form-control noSpinner" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="10" maxlength="10" required>
                </div>
                <!-- TAJ -->
                <div class="input-group input-group-sm mb-3 inputField">
                    <span class="input-group-text" id="inputGroup-sizing-sm">TAJ szám</span>
                    <input id="TAJ" name="TAJ" type="text" value="<?php echo $TAJ ?>" class="form-control noSpinner" aria-label="Sizing example input" onchange="submitSetEnable()" aria-describedby="inputGroup-sizing-sm" minlength="9" maxlength="9" required>
                </div>
                <!-- Bankszámlaszám -->
                <div class="input-group input-group-sm mb-3 inputField">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Bankszámla szám</span>
                    <input id="bankszamlaszam" name="bankszamlaszam" type="text" value="<?php echo $bankszamlaszam ?>" class="form-control noSpinner" onchange="submitSetEnable()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="24" maxlength="24" value="" required>
                </div>
                <br>
                <!-- gombok -->
                <div class="mid">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button id="updateWorkerBtn" type="submit" class="btn btn-primary" >Mentés</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button id="megseBtn" type="reset" class="btn btn-primary">Mégse</button>
                    <!-- gombok -->
                    <br>
                </div>
            </div>
        </form>
        <!-- form vége -->
    </div>
</body>