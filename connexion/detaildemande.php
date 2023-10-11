<?php
session_start();
require_once("../requetes/bdconnect.php");
include("../requetes/compte.php");
include("../requetes/voitures.php");
$bdd = bdconnect();
$marques = marques();
$list = liste_demande();
  if (!isset($_SESSION['utilisateur'])) {
    header('Location:../index.php');
  };
  
  if (isset($_GET['annule'])) {
    suprimer_commande($_GET['annule']);
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
    <link rel="stylesheet" href="/assets/Style/Style.css">
     <link rel="stylesheet" href="assets/Style/acceuil.css">
    <style>
        .bill-header {
  font-size: 12px;
  text-align: center;
}

.form-control:focus {
  border-color: #25476a;
  outline: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}

#trs-hd {
  text-align: center;
}

.bill-header.cs {
  background-color: rgba(37,71,106,0.56);
  color: #fff;
}

footer {
  position: absolute;
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
    <div class="col-md-12 search-table-col">
        <div class="table-responsive table table-hover table-bordered results">
            <table class="table table-hover table-bordered">
                <thead class="bill-header cs">
                    <tr>
                        
                        <th id="trs-hd-2" class="col-lg-2">Nom client</th>
                        <th id="trs-hd-2" class="col-lg-3">Nom voiture</th>
                        <th id="trs-hd-4" class="col-lg-2">date livraison</th>
                        <th id="trs-hd-5" class="col-lg-2">heure de livraison</th>
                        <th id="trs-hd-1" class="col-lg-1">statut</th>
                        <th id="trs-hd-6" class="col-lg-2">Action</th>
                    </tr>
                </thead>
                <?php
                  if(!empty($list)):
                    foreach ($list as $aff):                      
                    ?>
                    <tbody>
                      <tr>
                        <td><?=$aff['nom_client']." ".$aff['prenom_client']?></td>

                        <td><?=$aff['nom_voiture']?></td>
                        <td><?php echo date('d F y', strtotime($aff['date_essai'])); ?></td>

                        <td><?php echo date('H\hi', strtotime($aff['heure_essai'])); ?></td>

                        
                        <td><?=$aff['statut']?></td>
                        <td>
                          
                          <form method="GET">
                              <input class="btn btn-danger" style="margin-left: 5px;" type="submit" name="annule" value="<?=$aff['id_demande']?>">
                          </form>
                        
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    else : ?>
                          <tr>
                            <td colspan="12" class="bg-secondary bg-gardient">Pas demande</td>
                          </tr>
                    <?php
                  endif;
                  ?>

                  <!--
                    <tr>
                        <td colspan="12" class="bg-secondary bg-gardient">No Result !!!</td>
                    </tr>
                    <tr>
                        <td colspan="12" style="background:rgb(16, 215, 16)"> accepte</td>
                    </tr>
                    <tr>
                        <td colspan="12" style="background:rgb(255, 46, 4)"> refus</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="spinner-border"></i><p>en cours</p>
                        </td>
                    </tr>
                  -->
                  
                </tbody>
            </table>
        </div>
    </div>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Copyright © 2023 SUPERCAR</p>
          </div>
        </div>
      </div>
    </footer>
</html>