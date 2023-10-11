<?php

include("../requetes/bdconnect.php");
include("../requetes/voitures.php");
$bdd = bdconnect();
$detail_voiture = detail_voitur();
$idv = $_POST['idv'];
$prix_ancienne = (int)$detail_voiture['prix_voiture'];
$new_prix = $_POST['nouveau_prix'];
$augmentation_max = $detail_voiture['prix_voiture']* 20 / 100;
$augmentation_max = $augmentation_max + $prix_ancienne;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement du prix</title>
</head>

<body>
    <?php
    if ($new_prix < $prix_ancienne) {
    ?><p>Désolé le prix <?= (int)$new_prix ?> RS est inférieur </p>
    <?php
    } elseif ($new_prix > $prix_ancienne) {

        if ($new_prix > $augmentation_max) {
            
            echo"<p>Désolé le prix $new_prix RS est superieur à l'augmentation de 20% max:$augmentation_max</p>";
        } else {
           $sql = "UPDATE voiture SET prix_voiture = $new_prix WHERE id_voiture = $idv ";
           $result = $bdd ->query($sql);
           if ($result) {
            echo"<p color='green'>insertion $new_prix avec succes</p>";
           }else{
            echo"<p>insertion non succes</p>";
           }
        }
    }

    ?>
</body>

</html>