<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Dolgozó felvétele</title>
</head>

<?php
include "header.php"
?>
<div class="container-l">
    <div class="row">
        <div class="container-xl col mid">
            <div class="container-xl col">
                <!-- közepso -->
                <div>
                    <!-- input form -->
                    <!-- ide kell a kozepso div címe, kozepre igazítva-->
                    <div class=" input-group input-group-sm mb-3 mid inputField">
                        <span class="input-group-text" id="inputGroup-sizing-s">Vezetéknév</span> <!-- ID ne felejtsd -->
                        <input type="text" class="form-control mid" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s">
                    </div>
                    <div class="input-group input-group-sm mb-3 inputField">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Keresztnév</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <!-- dropdown -->

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Munkakörök
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <?php
                            for ($i = 0; $i < 3; $i++) {    //ide kell betölteni munkaköröket
                                echo '<li><a class="dropdown-item" href="#">Action</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <br>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Szervezeti egységek
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                                echo '<li><a class="dropdown-item" href="#">Action</a></li>';
                                //ide kell betölteni szervezeti egységeket
                            }
                            ?>
                        </ul>
                    </div>
                    <br>
                    <button id="createWorkerBtn" type="button" class="btn btn-primary">Mentés</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


</html>