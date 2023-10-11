<?php
session_start();
require_once("../requetes/bdconnect.php");
include("../requetes/compte.php");
include("../requetes/voitures.php");
$bdd = bdconnect();
$marques = marques();
$erreur = "";
if (!isset($_SESSION['utilisateur'])) {
    if (isset($_POST['creer'])) {
        $erreur = inscription();
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


    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">

    <style>
        main {
            background-color: #cfe2ff;
            
        }

        .contacts {
            margin-top: 10px;
            padding: 40px;
            border-top: 2px solid blue;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            background-color: white;
            margin-bottom: 20px;
        }

        input:focus {

            box-shadow: none !important;
        }

        fieldset {
            padding: 10px;
        }

        button:hover {
      background-color: white !important;
      color: black !important;
    }
    </style>

    <title>inscription</title>
</head>

<body>
    <?php include("../header.php") ?>

    <main>
        <div class="container">
            <div class="block-heading text-center">
                <h2 class="text-info">INSCRIPTION</h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-5">
                    <div class="container contacts">
                        <div class="row">

                            <form method="post">
                                <div>
                                    <?= $erreur ?>
                                    <p class='erreur' style="color:red"></p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <fieldset>

                                            <label class="form-label" for="nom">Votre nom </label>
                                            <input class="form-control item" type="text" id="nom" name="nom" placeholder="Malto" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <label class="form-label" for="prenom">Votre prénom </label>
                                            <input class="form-control item" type="text" id="prenom" name="prenom" placeholder="Martin" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label class="form-label" for="adr">Votre adresse </label>
                                            <input class="form-control item" type="text" id="adr" name="adr" placeholder="36 avenue trianon quatreborne" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label class="form-label" for="email">Votre e-mail</label>
                                            <input class="form-control item" type="mail" id="email" name="email" placeholder="monadresse@mail.com" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label class="form-label" for="num">Votre numéro mobile</label>
                                            <select id="pays" name="pays">
                                                <option value="+230">Maurice (+230)</option>
                                            </select>
                                            <input class="form-control item" type="tel" id="num" name="num" placeholder="55433423" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label class="form-label" for="mdp1">Votre mot de passe</label>
                                            <input type="password" id="mdp1" name="mdp1" class="form-control item mdp1" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label class="form-label" for="mdp2">Confirmation du mot de passe</label>
                                            <input type="password" id="mdp2" name="mdp2" class="form-control mdp2" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button class="btn btn-primary w-100" type="submit" id="form-submit" class="main-button" name="creer">Créer mon compte</button>
                                            <div>
                                                <a href="index.php">connexion</a>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                            </form>






                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <script>
        var mdp1 = document.querySelector('.mdp1');
        var mdp2 = document.querySelector('.mdp2');
        var formulaire = document.querySelector('form');
        var boutonSoumission = document.querySelector('button[type="submit"]');

        mdp2.onkeyup = function() {
            var erreur = document.querySelector('.erreur');
            if (mdp1.value != mdp2.value) {
                erreur.innerText = "Les deux mots de passe sont différents";
                boutonSoumission.setAttribute('disabled', 'true'); // Désactiver le bouton de soumission
            } else {
                erreur.innerText = "";
                boutonSoumission.removeAttribute('disabled'); // Activer le bouton de soumission
            }
        }

        formulaire.addEventListener('submit', function(event) {
            if (mdp1.value != mdp2.value) {
                event.preventDefault(); // Empêcher l'envoi du formulaire
            }
        });
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