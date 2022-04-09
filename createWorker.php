<?php
include "header.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
        src = "js/bootstrap.js"
    </script>

    <title>Dolgozó felvétele</title>
</head>



<body>

    <div class="container-l">
        <div class="row">
            <div class="container-xl col">
                <div class="container-xl">
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
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <!-- dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                <span class="caret"></span></button>

                            <div class="dropdown-menu">
                                <li><a class="dropdown-item">HTML</a></li>
                                <li><a class="dropdown-item">HTML</a></li>
                                <li><a class="dropdown-item">HTML</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>


                        <br> - <br>

                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-macos mx-0 border-0 shadow" style="width: 220px;">
                            <li><a class="dropdown-item active" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>

                        <div>
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none dropdown-toggle" id="dropdownNavLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="bi me-2" width="40" height="32">
                                        <use xlink:href="#bootstrap"></use>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownNavLink" style="width: 220px;">
                                    <li><a class="dropdown-item active" href="#" aria-current="page">Overview</a></li>
                                    <li><a class="dropdown-item" href="#">Inventory</a></li>
                                    <li><a class="dropdown-item" href="#">Customers</a></li>
                                    <li><a class="dropdown-item" href="#">Products</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Reports</a></li>
                                    <li><a class="dropdown-item" href="#">Analytics</a></li>
                                </ul>
                            </div>
                        </div>

                        <button id="createWorkerBtn" type="button" class="btn btn-primary">Mentés</button>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
        </button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item active" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
    </div>
</body>

</html>