<?php
session_start();
require_once("../requetes/bdconnect.php");
include("../requetes/compte.php");
include("../requetes/voitures.php");
$bdd = bdconnect();
$marques = marques();
$erreur = "";
if (!isset($_SESSION['utilisateur'])) {
  if (isset($_POST['connexion'])) {
    $erreur = connecte();
  }
} else {
  header('Location:../index.php');
}


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

  <link rel="stylesheet" href="../assets/Style/style.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <style>
    input:focus {

      box-shadow: none !important;
    }

    button:hover {
      background-color: white !important;
      color: black !important;
    }

    .dark{

      background-color: #cfe2ff !important;
    }
  </style>
  <title>login</title>
</head>

<body>
  <?php include("../header.php") ?>


  <main>
    <section class="clean-block clean-form dark">
      <div class="container">
        <div class="block-heading">
          <h2 class="text-info">LOGIN</h2>

        </div>
        <form method="POST" action="index.php" >
          <div>
            <?= "<p class='link-danger'>" . $erreur . "</p>" ?>
          </div>
          <div class="mb-3"><label class="form-label" for="email">Email</label>
            <input class="form-control item" id="email" type="mail" placeholder="Entrer votre mail" name="mail" required>
          </div>
          <div class="mb-3"><label class="form-label" for="password">Password</label>
            <input class="form-control" id="password" type="password" placeholder="Entrer le mot de passe" name="pass" required>
          </div>

          <div class="mb-3">
            <button class="btn btn-primary w-100" type="submit" name="connexion">connecter</button>
            <p><a href="inscription.php">S'inscrire</a></p>
          </div>
        </form>
      </div>
    </section>
  </main>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p>Copyright © 2023 SUPERCAR</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
