<?php
try {
    $url = "mysql:dbname=supercar;host=supercar.mu";

    $user_bdd = "root";
    $pass_bdd = "";
    $bdd = new PDO($host, $user_bdd, $pass_bdd);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$sql = "SELECT * FROM voiture";
$resultat = $bdd->query($sql);
$resultat = $resultat->fetchAll();


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes des voitures</title>
</head>

<body>




</body>

</html>