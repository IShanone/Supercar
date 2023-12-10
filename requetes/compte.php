<?php

function connecte()
{
    global $bdd;
    extract($_POST);
    $erreur = 'mail et mot de passe incorrect';
    $connexion = $bdd->prepare("SELECT * FROM client WHERE e_mail = ?");
    $connexion->execute([$mail]);
    $connexion = $connexion->fetch();
    if ($connexion) {
        if ($connexion['mdp_client'] == $pass) {
            $idc = $connexion['id_client'];
            $mailc = $connexion['e_mail'];
            $username = $connexion["prenom_client"];
            $_SESSION["utilisateur"] = array(

                'id_client' => $idc,
                'mail' => $mailc,
                'username' => $username
            );
            header('Location:?p=accueil');
            exit();
        } else {
            $erreur = 'mot de passe incorect';
        }
    }
    return $erreur;
}


function deconnexion()
{
    unset($_SESSION['utilisateur']);
    header('Location:/index.php');
}

function inscription()
{
    global $bdd;

    $validation = true;
    $erreur = '';
    $email =  $_POST['email'];
    $sql = "SELECT e_mail FROM Client WHERE e_mail = '$email'";
    $ligne = $bdd->query($sql);
    $ligne = $ligne->fetch();
    if ($ligne) {
        $erreur = "<p style=\"color:red\">Client existe deja</p>";
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $validation = false;
            $erreur = "<p style=\"color:red\">L'adresse e-mail n'est pas valide</p>";
        }
        if ($validation) {
            $sql = "INSERT INTO client(nom_client,prenom_client,e_mail,Adresse,tel_client,mdp_client) VALUES (:nom, :prenom, :email, :adr, :num, :mdp1)";
            $inscription = $bdd->prepare($sql);
            $inscription->execute([
                'nom' => htmlentities($_POST['nom']),
                'prenom' => htmlentities($_POST['prenom']),
                'email' => htmlentities($_POST['email']),
                'adr' => htmlentities($_POST['adr']),
                'num' => htmlentities($_POST['num']),
                'mdp1' => htmlentities($_POST['mdp1'])
            ]);
            if ($inscription) {
                $erreur = "<p style=\"color:green\">Inscription réussie</p>";
            }
        }
    }

    return $erreur;
}


function demande()
{
    global $bdd;
    extract($_POST);
    $res = "<p style='color:red;'>Il y a une erreur refait votre demande</p>";
    $sql = "INSERT INTO `demande_essai` (`adresse_essai`, `date_essai`, `heure_essai`,`id_client`, `id_voiture`) 
    VALUES (:adres, :date, :heure, :idc, :idv)";
    $demande = $bdd->prepare($sql);
    $demande->execute([
        'adres' => htmlentities($adresse),
        'date' => htmlentities($Date),
        'heure' => htmlentities($heure),
        'idc' => htmlentities($idc),
        'idv' => htmlentities($idv)
    ]);

    if ($demande) {
        $res = "<p style=\"color:green\">Demande envoyé</p>";
    }

    return $res;
}
function liste_demande()
{
    global $bdd;
    $id = $_SESSION['utilisateur']['id_client'];
    $sql = "SELECT d.id_demande, c.nom_client,c.prenom_client ,v.nom_voiture ,d.date_essai , d.heure_essai , d.statut FROM demande_essai d 
    INNER JOIN client c ON c.id_client = d.id_client
    INNER JOIN voiture v ON d.id_voiture = v.id_voiture
    WHERE c.id_client = ?;";
    $listes = $bdd->prepare($sql);
    $listes->execute([$id]);
    $listes = $listes->fetchAll();
    if ($listes && count($listes) > 0) {
        return $listes;
    } else {
        $listes = "";
        return $listes;
    }
}
function mail_existe($email)
{
    global $bdd;
    $sql = "SELECT id_client FROM client WHERE e_mail=?";
    $i = $bdd->prepare($sql);
    $i->execute([$email]);
    $id = $i->fetchColumn();
    $id = ($id) ? $id : "";
    return $id;
}
function insertion_id($name, $surname, $email, $subject, $message, $id_personne)
{
    global $bdd;
    $sql = "INSERT INTO contact(nom_contact, prénom, e_mail, objet, `Message`, id_client)
    VALUES (:name, :surname, :email, :subject, :message, :id_personne)";
    $i = $bdd->prepare($sql);
    $i->execute([
        ':name' => $name,
        ':surname' => $surname,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message,
        ':id_personne' => $id_personne
    ]);

    $insertion = ($i) ? true : false;
    return $insertion;
}
function insertion($name, $surname, $email, $subject, $message)
{
    global $bdd;
    $sql = "INSERT INTO contact(nom_contact, prénom, e_mail, objet, `Message`)
    VALUES (:name, :surname, :email, :subject, :message)";
    $i = $bdd->prepare($sql);
    $i->execute([
        ':name' => $name,
        ':surname' => $surname,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message
    ]);

    $insertion = ($i) ? true : false;
    return $insertion;
}
function suprimer_commande($id)
{
    global $bdd;
    $sql = "DELETE FROM demande_essai WHERE id_demande = ? ";
    $suprimer = $bdd->prepare($sql);
    $suprimer = $suprimer->execute([$id]);
}
