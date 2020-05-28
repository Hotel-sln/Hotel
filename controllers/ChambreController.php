<?php
require('models/Chambre.php');

function indexAction() {
    $chambre = new Chambre();
    $chambres = $chambre->getChambres();

    $pageTitle = 'Liste des chambres';
    require('views/chambre/index.php');
}