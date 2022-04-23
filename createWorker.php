<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="js/validation.js"></script>
    <title>Dolgozó felvétele</title>
</head>

<?php
include_once "header.php";
session_start();

$vezetekNev = $_POST["vezetekNev"];
$keresztNev = $_POST["keresztNev"];
//$munkakorID = $_POST["munkakorID"];
//$szervEgysID = $_POST["szervEgysID"];
$bruttoBer = $_POST["bruttoBer"];
$adoazonosito = $_POST["adoazonosito"];
$TAJ = $_POST["TAJ"];
$bankszamlaszam = $_POST["bankszamlaszam"];

?>

<body>
    <div class="container-l">
        <div class="row">
            <div class="container-xl col">
                <!-- input form -->
                <!-- ID ne felejtsd -->
                <form id="createWorkerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div id="errorShowDiv"></div>
                    <div>
                        <div class="mid" style="font-size: 30px;">Dolgozó felvétele </div><br>
                        <div class="mid">A csillaggal jelölt mezőket kötelező kitölteni</div><br>
                        <!-- név -->
                        <div>
                            <div class=" input-group input-group-sm mb-3 inputField">
                                <span class="input-group-text" id="inputGroup-sizing-s">Vezetéknév</span>
                                <input id="vezetekNev" name="vezetekNev" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s" placeholder="*Kovács" value="<?php echo $vezetekNev ?>" required>
                            </div>
                            <div class="input-group input-group-sm mb-3 inputField">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Keresztnév</span>
                                <input id="keresztNev" name="keresztNev" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="*István" required>
                            </div>
                        </div>
                        <!-- dropdowns -->
                        <div class="dropdown inputField">
                            <button id="dropdownMenuButton" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Munkakörök</button>
                            <ul id="munkakorID" name="munkakorID" class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                <?php
                                require_once "connection.php";
                                $sql = "SELECT * FROM munkakorok";
                                $records = mysqli_query($conn, $sql);


                                if (mysqli_num_rows($records) > 0) {
                                    while ($row = mysqli_fetch_assoc($records)) {
                                        echo '<li><a class="dropdown-item" id="', $row["munkakorID"], '" href="#">', $row["munkakorNev"], '</a></li>';
                                    }
                                } else {
                                    echo "0 results ";
                                }
                                ?></ul>
                        </div>
                        <br>
                        <div id="dropdownMenuButton2" class="dropdown inputField">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Szervezeti egységek</button>
                            <ul id="szervEgysID" name="szervEgysID" class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <?php

                                $sql = "SELECT * FROM szervegys";
                                $records = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($records) > 0) {
                                    while ($row = mysqli_fetch_assoc($records)) {
                                        echo '<li><a class="dropdown-item" id="', $row["szervegysID"], '" href="#">', $row["szervEgysNev"], '</a></li>';
                                    }
                                } else {
                                    echo "0 results ";
                                }
                                ?>
                            </ul>
                        </div>
                        <br>
                        <!-- Bruttóbér -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Bruttóbér</span>
                            <input id="bruttoBer" maxlength="9" name="bruttoBer" type="text" class="form-control noSpinner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="123 456 Ft/hónap*" required>
                        </div>
                        <!-- adóazonosító -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Adóazonosító</span>
                            <input id="adoazonosito" name="adoazonosito" type="text" class="form-control noSpinner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="10" maxlength="10" placeholder="0123456789*" required>
                        </div>
                        <!-- TAJ -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">TAJ szám</span>
                            <input id="TAJ" name="TAJ" type="text" class="form-control noSpinner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="9" maxlength="9" placeholder="123 456 789*" required>
                        </div>
                        <!-- Bankszámlaszám -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Bankszámla szám</span>
                            <input id="bankszamlaszam" name="bankszamlaszam" type="text" class="form-control noSpinner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="24" maxlength="24" placeholder="00001111-22223333-44445555*" required>
                        </div>
                        <br>
                        <!-- gombok -->
                        <div class="mid">
                            <button id="createWorkerBtn" type="submit" class="btn btn-primary">Mentés</button>
                            <?php
                            //Select max id +1
                            // trim($_post[values]) függvényt megnézni
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                $sqlInsert = "INSERT INTO dolgozok(ID, vezetekNev, keresztNev, munnkakorID, szervEgysID, bruttoBer, adoazonosito, TAJ, bankSzamla) 
                                VALUES (?,?,?,?,?,?,?,?,?)";
                                if ($stmt = mysqli_prepare($conn, $sqlInsert)) {
                                    // bind variables to the prepered statement as paramaters
                                    mysqli_stmt_bind_param($stmt,"issiiisss",$param_ID,$param_vezetekNev,$param_keresztNev,$param_munkakorID,$param_szervEgysID,$param_bruttoBer,$param_TAJ,$param_adoazonosito,$param_bankszamlaszam);
                                    //set parameters

                                    $param_ID = 1;
                                    //$param_ID = $ID;

                                    $param_vezetekNev = $vezetekNev;
                                    $param_keresztNev = $keresztNev;

                                    $param_munkakorID = 1;
                                    //$param_munkakorID = (int)$munkakorID;

                                    $param_szervEgysID = 1;
                                    //$param_szervEgysID = (int)$szervEgysID;

                                    $param_bruttoBer = (int)$bruttoBer;
                                    $param_adoazonosito = $adoazonosito;
                                    $param_TAJ = $TAJ;
                                    $param_bankszamlaszam = $bankszamlaszam;

                                    if(mysqli_stmt_execute($stmt)){
                                        //redirect to index page
                                        //header("location: index.php");
                                    } else {
                                        //echo "Hoppá valami nem jó próbáld újra";
                                    }
                                    mysqli_stmt_close($stmt);
                                }
                            }
                            mysqli_close($conn);
                            ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button id="megseBtn" type="reset" class="btn btn-primary">Mégse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<!-- Optional JavaScript; choose one of the two ! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->

</html>