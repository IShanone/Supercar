<?php

function voitures()
{
    global $bdd;
    $sql = "SELECT * FROM voiture v 
    INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture
    INNER JOIN marque m ON v.id_marque = m.id_marque
    GROUP BY v.id_voiture;";
    $voitures = $bdd->query($sql);
    $voitures = $voitures->fetchAll();
    return $voitures;
}
function voitures_marque()
{
    global $bdd;
    $id = (int)$_GET['idm'];
    $sql = "SELECT * FROM voiture v 
    INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture
    INNER JOIN marque m ON v.id_marque = m.id_marque
    WHERE m.id_marque = ?
    GROUP BY v.id_voiture;";
    $voiture_marque = $bdd->prepare($sql);
    $voiture_marque->execute([$id]);
    $voiture_marque = $voiture_marque->fetchAll();
    return $voiture_marque;
}
function voitures_type()
{
    global $bdd;
    $id = (int)$_GET['idt'];
    $sql = "SELECT * FROM voiture v 
    INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture
    INNER JOIN marque m ON v.id_marque = m.id_marque
    INNER JOIN `type` t ON v.id_type = t.id_type
    WHERE v.id_type = ?
    GROUP BY v.id_voiture;";
    $voiture_type = $bdd->prepare($sql);
    $voiture_type->execute([$id]);
    $voiture_type = $voiture_type->fetchAll();
    return $voiture_type;
}
function detail_voiture()
{
    global $bdd;
    $id = (int)$_GET['idv'];
    $sql = "SELECT * FROM voiture v 
    INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture
    INNER JOIN marque m ON v.id_marque = m.id_marque
    INNER JOIN `type` t ON v.id_type = t.id_type
    WHERE v.id_voiture = ?
    GROUP BY v.id_voiture;";
    $voiture = $bdd->prepare($sql);
    $voiture->execute([$id]);
    $voiture = $voiture->fetch();
    return $voiture;
}
function detail_voitur()
{
    global $bdd;
    $id = (int)$_POST['idv'];
    $sql = "SELECT * FROM voiture v 
    INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture
    INNER JOIN marque m ON v.id_marque = m.id_marque
    INNER JOIN `type` t ON v.id_type = t.id_type
    WHERE v.id_voiture = ?
    GROUP BY v.id_voiture;";
    $voiture = $bdd->prepare($sql);
    $voiture->execute([$id]);
    $voiture = $voiture->fetch();
    return $voiture;
}
function detail_image_voiture()
{
    global $bdd;
    $id = (int)$_GET['idv'];
    $sql = "SELECT i.url_image FROM voiture v 
    INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture
    WHERE v.id_voiture = ?";
    $voiture = $bdd->prepare($sql);
    $voiture->execute([$id]);
    $voiture = $voiture->fetchAll();
    return $voiture;
}
function marques()
{
    global $bdd;
    $sql = "SELECT * FROM marque";
    $marques = $bdd->query($sql);
    $marques = $marques->fetchAll();
    return $marques;
}
function types()
{
    global $bdd;
    $sql = "SELECT * FROM `type`";
    $types = $bdd->query($sql);
    $types = $types->fetchAll();
    return $types;
}

function Recherches()
{
    global $bdd;
    $id = $_GET['search'];
    $sql = "SELECT * FROM voiture v 
    INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture
    INNER JOIN marque m ON v.id_marque = m.id_marque
    INNER JOIN `type` t ON v.id_type = t.id_type
    WHERE v.nom_voiture LIKE ? OR v.couleur_voiture LIKE ? OR v.transmission LIKE ? OR v.pays_importation LIKE ? OR v.annee_voiture LIKE ? OR m.nom_marque LIKE ? Or t.nom_type = ?
    GROUP BY v.id_voiture";
    $recherche = $bdd->prepare($sql);
    $recherche->execute(["%$id%", "%$id%", "%$id%", "%$id%", "%$id%", "%$id%", "%$id%"]);
    $recherche = $recherche->fetchAll();
    if ($recherche) {
        return $recherche;
    } else {
        $recherche = '';
        return $recherche;
    }
}
