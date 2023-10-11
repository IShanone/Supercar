<?php
session_start();
require_once("../requetes/bdconnect.php");
include("../requetes/voitures.php");
include("../requetes/compte.php");
include("../requetes/services.php");
$bdd = bdconnect();
$marques = marques();
$mail = '';
$remaque = '';
if (isset($_SESSION['utilisateur'])) {
    $mail = $_SESSION['utilisateur']['mail'];
    if (isset($_GET['idv'])) {
        $detail_voiture = detail_voiture();
        $image = (!empty($detail_voiture['url_image'])) ? '<div style="width: 100%; height: 300px; overflow: hidden;">
        <img style="object-fit: cover; width: 100%; height: 100%;" src="'.$detail_voiture['url_image'].'" alt="Image de couverture"></div>' : '';
        if (isset($_POST['demande'])) {
            $_POST['idc'] = $_SESSION['utilisateur']['id_client'];
            $_POST['idv'] = $detail_voiture['id_voiture'];
            $remaque = demande();
        }
    } else {
        $image = '<a href="../voiture/index.php?idm=1" class="btn btn-dark d-block w-100" required>Choisir voiture</a>';
    }
} else {
    header("Location: ../connexion/index.php");
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

    <!--Autres style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/Style/style.css">
    <link rel="stylesheet" href="../assets/Style/demande.css">
    <title>Demande</title>
</head>

<body>
    <?php include("../header.php") ?>




    <main>

        <section class="position-relative py-4 py-xl-5">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <h2 class="text-center mb-4">Demande d'essai: <?php if (isset($_GET['idv'])) {
                                                                            echo $detail_voiture['nom_marque'] . " " . $detail_voiture['nom_voiture'];
                                                                        } ?>
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <div class="card">

                            <div class="card-body p-sm-5">
                                <form method="post">
                                    <div class="mb-3"></div>
                                    <div class="mb-3">
                                        <p><?= $remaque ?></p>
                                        <p><?= $mail ?></p>
                                        <p>Adresse d'essaie</p>
                                        <input class="form-control" type="text" id="name-2" name="adresse" placeholder="Adresse" required>
                                        <p>Date de d'essaie</p>
                                        <input class="form-control" type="date" id="adresse" name="Date" required>
                                        <p>Heure d'essaie</p>
                                        <input class="form-control" type="time" id="heure" name="heure" required>

                                    </div>
                                    <div class="mb-3"></div>
                                    <div>
                                        <input type="submit" class="btn btn-primary d-block w-100" value="Envoyer" name="demande">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"><?= $image ?></div>

                </div>
            </div>
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
        var demande = document.querySelector('.navbar-nav .nav-item:nth-child(4) a');
        demande.classList.add('active');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>