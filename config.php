<?php

/**
 * Ici ce configure toutes les configurations du site
 */

// Nom du site web
define("NOM_DU_SITE", "supercar");

// url vers Bootstrap 5.3.2
define('URL_BOOTSTRAP_CSS', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
define("URL_BOOTSTRAP_JS", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js");
// url de jquery 3.7.1 pour faire fonctionner boostrap et etc
define('URL_JQUERY', "https://code.jquery.com/jquery-3.7.1.min.js");
// url de cdn pour font-awesome 6.4.2
define('URL_FONT_AWESOME', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');

/**
 * Ici les chemin pour le pages par rapport a la raçine
 */
// Chemin vers l'accès CSS
define("URL_CSS", 'assets/Style');

// Chemin vers les images voiture
define('URL_IMAGE', 'assets/images');

define('URL_IVOITURES', 'assets/images/voitures');

// Chemin vers les logos
define('URL_LOGO', 'assets/images/logo');

// Chemin vers les includes
define('URL_INCLUDES', 'includes');

// Chemin vers les pages p comme variable get 
define('URL_PAGE', 'pages');


// Chemin vers les requetes
define('URL_REQUETES', 'requetes/');
