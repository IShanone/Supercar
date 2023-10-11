<?php
session_start();
require_once("../requetes/bdconnect.php");
include("../requetes/voitures.php");

include("../requetes/services.php");
$bdd = bdconnect();
$marques = marques();
$services = services();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Pour mettre le logo de supercar sur le net-->
  <link rel="shortcut icon" href="/assets/images/logo/logo.png" type="image/png">


  <!--Autres style-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

  <!--BOOSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="../assets/Style/style.css">
  <link rel="stylesheet" href="../assets/Style/voiture.css">

  <style>
    .fond{
      background-color: rgba(73, 96, 135, 0.507);
    }
  </style>

  <title>services</title>
</head>

<body>
  <?php
  include("../header.php");
  ?>
  <main class="container">
    <section class="jumbotron text-center" style="background-image: url('../assets/images/services/service.jpg'); background-size: cover;">
      <div class="container fond">
        <h1 class="jumbotron-heading">Bienvenue sur la page service</h1>
        <p class="lead text-muted"> <b>Découvrez nos services de qualité pour votre besoin </b></p>
        <p>
          <a href="/connexion/index.php" class="btn btn-primary my-2">Se connecter</a>
          <a href="/contact/index.php" class="btn btn-primary my-2">Nous contacter</a>
        </p>
      </div>
    </section>

    <section class="container">

      <h2>Supercar</h2>
      <p>Bienvenue chez supercar Services, votre partenaire de confiance pour tous vos besoins en matière de garantie, d'entretien et de maintenance, ainsi que de pièces d'origine. Notre équipe de professionnels expérimentés est là pour vous aider à maintenir vos équipements en excellent état de fonctionnement et à prolonger leur durée de vie.</p>

    </section>

    <section class="container mt-4">
      <div class="row">
        <h2 class="text-center">Nos services</h2>
        <?php
        foreach ($services as $service) :
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow h-100">
              <img src="/<?= $service['image_service'] ?>" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title"><?= $service['nom_service'] ?></h4>
                <p class="card-text"><?= $service['petitePhrases'] ?></p>
                <a href="detservice.php?ids=<?= $service['id_service'] ?>" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>
      </div>
    </section>

    <section class="container">

      <h2>Pourquoi chez nous?</h2>
      <p>Chez supercar Services, nous sommes fiers d'offrir des services de qualité supérieure à des prix compétitifs. Nous sommes là pour vous aider à maintenir vos équipements en excellent état de fonctionnement et à prolonger leur durée de vie. Si vous avez des questions ou des besoins spécifiques, n'hésitez pas à nous contacter. Nous sommes toujours là pour vous aider.</p>

    </section>

  </main>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p>Copyright © 2023 SUPERCAR</p>
        </div>
      </div>
    </div>
  </footer>
  <script>
    var service = document.querySelector('.navbar-nav .nav-item:nth-child(3) a');
    service.classList.add('active');
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>