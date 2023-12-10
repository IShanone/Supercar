<?php


function bdconnect()
{

    try {
        $host = "mysql:dbname=supercar;host=localhost";
        $user_bdd = "root";
        $pass_bdd = "";
        $bdd = new PDO($host, $user_bdd, $pass_bdd);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    return $bdd;
}
