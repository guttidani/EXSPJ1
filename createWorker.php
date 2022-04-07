<?php
include "header.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dolgozó felvétele</title>
</head>

<body>

    <body>
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
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Keresztnév</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <button id="createWorkerBtn" type="button" class="btn btn-primary">Mentés</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</body>

</html>