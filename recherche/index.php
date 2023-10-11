<?php
session_start();
require_once("../requetes/bdconnect.php");

include("../requetes/voitures.php");
include("../requetes/compte.php");
include("../requetes/services.php");
$bdd = bdconnect();
$voitures = voitures();
$marques = marques();
$services = services();

if (isset($_GET['search'])) {
  $recherche = $_GET['search'];
  $resultat = recherches();
} elseif (isset($_GET['marque']) && isset($_GET['transmission'])) {
  $mar = $_GET['marque'];
  $transmission = $_GET['transmission'];
} else {
  header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Recherche de voitures</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


  <!--Pour mettre le logo de supercar sur le net-->
  <link rel="shortcut icon" href="/assets/images/logo/logo.png" type="image/png">

  <link rel="stylesheet" href="../assets/Style/Style.css">

  <link rel="stylesheet" href="../assets/Style/acceuil.css">
  <style>
    main{
      background-color: #cfe2ff;
    }
    footer {
      bottom: 0;
      width: 100%;
      height: 60px;
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <?php
  include("../header.php");
  ?>
  <main>
  <div class="container mt-5">


    <h2>Résultats <?= $recherche ?>:</h2>
    <div class="row mt-3">
      <?php
      if (!empty($resultat)) :
        foreach ($resultat as $res) :
      ?>

          <div class="col-sm-4 mb-3">
            <div class="card">
              <img class="card-img-top" src="<?= $res['url_image'] ?>">
              <div class="card-body">
                <h5 class="card-title"> <?= $res['nom_marque'] . " " . $res['nom_voiture'] ?></h5>
                <a href="../voiture/detail.php?idv=<?= $res['id_voiture'] ?>" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>

        <?php
        endforeach;
      else : ?>
        <div class="col-sm-4 mb-3">
          <p style="color:red">Aucune voiture trouvée</p>
        </div>
      <?php
      endif;

      ?>


    </div>
  </div>
  </main>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p>Copyright © 2023 SUPERCAR</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>