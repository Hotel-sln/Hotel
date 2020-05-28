<?php
require('models/Chambre.php');

function indexAction() {
    $chambreObject = new Chambre();
    $chambres = $chambreObject->getChambres();

    $pageTitle = 'Liste des chambres';
    require('views/chambre/index.php');
}