<?php


function bdconnect()
{

    try {
        $host = "mysql:dbname=fitia2023_supercar;host=mysql-fitia2023.alwaysdata.net";
        $user_bdd = "";
        $pass_bdd = "";
        $bdd = new PDO($host, $user_bdd, $pass_bdd);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    return $bdd;
}
