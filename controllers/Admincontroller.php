<?php
require('models/Chambre.php');

function listechambresAction(){
$chambreObject = new Chambre();
$chambres = $chambreObject->getChambres();
$pageTitle = 'Liste des chambres';
    require('views/admin/listechambres.php');
}

function editchambreAction(){
    $chambreObject = new Chambre();
    $chambreupdate= $chambreObject->updateChambres();
  
}
function deletechambreAction(){
    $chambreObject = new Chambre();
    $chambreupdate= $chambreObject->deleteChambres();
  
}
function createchambreAction(){
    $chambreObject = new Chambre();
    $chambreupdate= $chambreObject->createChambres();
  
}