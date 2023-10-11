<?php
include("../requetes/bdconnect.php");
include("../requetes/voitures.php");

$bdd = bdconnect();
if (isset($_GET['idv'])) {
    $detail_voiture = detail_voiture();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification de prix</title>
</head>

<body>
    <h1>Modification de prix</h1>
    <table border="1" cellspacing="0">
        <tr bgcolor="gray">
            <td>Modele de la voiture</td>
            <td>Prix de la voiture en RS</td>
            <td>validation</td>
        </tr>
        <tr>
            <form action="traitement_prix.php" method="POST">
                <td>
                    <p><?= $detail_voiture['nom_marque'] . " " . $detail_voiture['nom_voiture'] ?></p>
                    <input type="hidden" value="<?= $detail_voiture['id_voiture']?>" name="idv">
                </td>
                <td><input type="text" value="<?= (int)$detail_voiture['prix_voiture'] ?>" name="nouveau_prix"></td>
                <td><button >modifie</button></td>
            </form>
        </tr>
    </table>
</body>

</html>