<?php

session_start();
require_once("../requetes/bdconnect.php");
include("../requetes/compte.php");
include("../requetes/voitures.php");
$bdd = bdconnect();
$marques = marques();

  if (!isset($_POST['contacter'])) {
    header('Location:../index.php');
  }else{
    extract($_POST);
    $id_personne = mail_existe($email);
  };


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
     <link rel="stylesheet" href="../assets/Style/contact.css">

    <title>contact</title>
</head>

<body>
    
    <?php 
        include("../header.php");
    
    if (!empty($id_personne)) {
        
        $affiche = (insertion_id($name,$surname,$email,$subject,$message,$id_personne)) ? "<p> Message bien envoyé" : "Il y a une erreur message non envoyé" ;
       echo $affiche ;
    } else {
        
        $affiche = (insertion($name,$surname,$email,$subject,$message)) ? "<p> Message bien envoyé" : "Il y a une erreur message non envoyé" ;
        echo $affiche;
    }
    
    
    ?>

    <script>
        var contact = document.querySelector('.navbar-nav .nav-item:nth-child(5) a');
    		contact.classList.add('active');
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