<?php
//Pour la session 
session_start();
//les importants pour fonctionnement du site
require("config.php");
$files = glob(URL_REQUETES . '*.php');
foreach ($files as $file) {
	include $file;
}
$bdd = bdconnect();
$services = services();
$marques = marques();
$types = types();
$voitures = voitures();

//Recuperer p : page 
$page = isset($_GET['p']) ? $_GET['p'] : 'accueil';

?>
<!DOCTYPE html>
<html lang="fr">

<!-- En tete du site -->

<head>
	<?php
	include(URL_INCLUDES . "/head.php");
	?>
</head>

<body>
	<?php

	//nav bar
	include(URL_INCLUDES . '/nav.php');

	?>

	<!-- Contenu du site -->
	<main>
		<?php
		//Les pages du site
		switch ($page) {
			case 'accueil':
				# pour inclure accueil
				include(URL_PAGE . "/accueil.php");
				break;

			case 'voitures':
				#pour incluer les voitures
				include(URL_PAGE . '/voitures.php');
				break;

			case 'contact':
				# pour inclure contact
				include(URL_PAGE . "/contact.php");
				break;

			case 'services':
				# pour inclure services
				include(URL_PAGE . "/services.php");
				break;
			case 'marques':
				# pour inclure accueil
				include(URL_PAGE . "/marques.php");
				break;
			case 'types':
				# pour inclure accueil
				include(URL_PAGE . "/types.php");
				break;
			case 'detservice':
				$service = service();

				# pour inclure detservice
				include(URL_PAGE . "/detservice.php");
				break;
			case 'politique':
				# pour inclure politique
				include(URL_PAGE . "/politique.php");
				break;

			case 'demande':
				# pour inclure demande
				/**
				 * Si la session n'existe pas on dirige vers connexion
				 */

				include(URL_PAGE . "/demande.php");
				break;

			case 'connexion':
				#pour inclure la connexion
				include(URL_PAGE . "/connexion.php");
				break;

			default:
				# pour par default page non trouve
				include(URL_PAGE . "/404.php");
		}
		?>
	</main>

	<?php
	//pied du page
	include(URL_INCLUDES . '/footer.php');
	?>

	<?php
	//Les scripts
	include(URL_INCLUDES . "/scripts.php");
	?>


</body>

</html>