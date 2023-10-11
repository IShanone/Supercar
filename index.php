<?php
session_start();

require_once("requetes/bdconnect.php");
include("requetes/compte.php");
include("requetes/voitures.php");
$bdd = bdconnect();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Pour mettre le logo de supercar sur le net-->
	<link rel="shortcut icon" href="/assets/images/logo/logo.png" type="image/png">

	<!--BOOSTRAP-->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" href="/assets/Style/style.css">
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
	<style>
		main {
			background-color: #cfe2ff;

		}

		.loader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			background: #ffffff;
			transition: opacity 5s, visibility 2s;
		}

		.loader--hidden {
			opacity: 0;
			visibility: hidden;
		}

		.loader::after {
			content: "";
			width: 75px;
			height: 75px;
			border: 15px solid #cfe2ff;
			border-top-color: #000000;
			border-radius: 50%;
			animation: loading 0.75s ease infinite;
		}

		@keyframes ouverture {
			0% {
				content: ".";
				color: black;
			}

			5% {
				content: "..";
				color: orange;
			}

			10% {
				content: "...";
				color: green;
			}

			15% {
				content: "rapidement";
				color: orange;
			}

			55% {
				content: ".";
				color: black;
			}

			57% {
				content: "..";
				color: orange;
			}

			68% {
				content: "...";
				color: green;
			}

			70% {
				content: "facilement";
				color: blue;
			}

			100% {
				content: "!";
			}

		}

		.animation_accueil::before {
			content: "";
			animation: ouverture 10s linear infinite;
		}

		@keyframes win {
			from {
				display: none;
			}

			to {
				color: green;
			}
		}

		.animation_accueil {
			color: blue;
			animation: win 2s linear infinite;

		}

		.icon {
			display: inline;
		}

		.text {

			background-color: rgba(73, 96, 135, 0.507);

		}

		button:hover {
			background-color: white !important;
			color: black !important;
		}
	</style>

	<title>accueil</title>
</head>

<body>
	<div class="loader"></div>
	<?php include("header.php") ?>

	<main>

		<section class="clean-block clean-hero" style="background-image:url(&quot;assets/images/fond.jpg&quot;);color:rgba(0, 0, 0, 0.7);">
			<div class="text">
				<h2 style="font-size: 40px; font-family:'Times New Roman', Times, serif">Bienvenue sur supercar</h2>
				<p style="font-size:35px">Trouvez la voiture de vos rêves en faisant l'essai</p>
				<div class="animation_accueil" style="font-size:35px"></div>
				<a class="btn btn-outline-light btn-lg" type="button" style="margin-bottom: 10px;" href="/voiture/index.php?idm=1">voir</a>
			</div>
		</section>

		<section class="clean-block features">
			<div class="container">
				<div class="block-heading">
					<h2 class="text-info">Ce que nous offrons</h2>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-5 feature-box"><img src="assets/images/logo/rechercher.png" class="icon">
						<h4>Voiture de marques</h4>
						<p>Nous avons des voitures de différentes marques connue comme audi, toyota, etc...</p><a class="btn btn-primary" href="/voiture/index.php?idm=1" type="button">regarder</a>
					</div>
					<div class="col-md-5 feature-box"><img class="icon" src="assets/images/logo/service-client.png">
						<h4>SERVICES</h4>
						<p>Une large gamme de services à tous vos besoins en matière de voiture<br><br></p><a class="btn btn-primary" type="button" href="/services/index.php">détails</a>
					</div>
					<div class="col-md-5 feature-box"><img class="icon" src="assets/images/logo/rechercher (1).png">
						<h4>Types de voitures</h4>
						<p>Proposons des types de voitures aux besoins des consommateurs&nbsp;</p><a class="btn btn-primary" type="button" href="/voiture/types.php?idt=1">voir</a>
					</div>
					<div class="col-md-5 feature-box"><img class="icon" src="assets/images/logo/communiquer.png">
						<h4>Contacts</h4>
						<p>Si vous avez des questions n'hésite pas à nous demandez</p><a class="btn btn-primary" type="button" href="/contact/index.php">contacter</a>
					</div>
				</div>
			</div>
		</section>
	</main>


	<script>
		window.addEventListener("load", () => {
			const loader = document.querySelector(".loader");

			loader.classList.add("loader--hidden");

			loader.addEventListener("transitionend", () => {
				document.body.removeChild(loader);
			});
		});

		var acceuil = document.querySelector('.navbar-nav .nav-item:nth-child(1) a');
		acceuil.classList.add('active');
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>Copyright © 2023 SUPERCAR</p>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>