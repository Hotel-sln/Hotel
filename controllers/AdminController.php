<?php
require('models/Chambre.php');

function listechambresAction(){
$chambreObject = new Chambre();
$chambres = $chambreObject->getChambres();
$pageTitle = 'Liste des chambres';
    require('views/admin/listechambres.php');
}

function editchambreAction(){
    $requestUri = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $chambreId =  isset($requestParams[2]) ? $requestParams[2] : null;
    $chambreObject = new Chambre();
    $chambre = $chambreObject->getChambre($chambreId);

    if (isset($_POST['forminscription2'])) {
        $chambreObject->changeChambre($chambreId);
    }


    $pageTitle = 'Modifier une chambre';
    require('views/admin/editchambre.php');
  
}
