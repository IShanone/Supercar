<?php

function services(){

    global $bdd;
    $sql = "SELECT * FROM `service`";
    $services = $bdd -> query($sql);
    $services = $services -> fetchAll();
    return $services;

}
function service(){
    global $bdd;
    $id = (int)$_GET['ids'];
    $sql = "SELECT * FROM `service` WHERE id_service=?";
    $service = $bdd -> prepare($sql);
    $service-> execute([$id]);
    $service = $service -> fetch();
    return $service;
}


?>