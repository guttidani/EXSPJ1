<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.js"> </script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script defer src="js/validation.js"></script>
</head>

<!-- navbar bootstrap -->

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light container mid">
		<div class="container-fluid mid">
			<a class="navbar-brand mid" href="index.php">Nyilvántartás</a> <!-- Cím-->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav mid">
					<!-- Navbar items -->
					<li class="nav-item">
						<a class="nav-link" href="createWorker.php">Dolgozó felvétele</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<?php 
	require_once "connection.php";
	?>
</header>


