<?php
require('models/Chambre.php');

function listechambresAction(){
$chambreObject = new Chambre();
$chambres = $chambreObject->getChambres();

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