<?php
$requestUri = str_replace('/Hotel/', '', $_SERVER['REQUEST_URI']);

switch ($requestUri) {
    
    case 'chambre':
        require('chambre.php');
    break;
    case 'reservation':
        require('reservation.php');
    break;
    case 'chambre_en':
        require('chambre_en.php');
    break;
    case 'reservation':
        require('reservation.php');
    break;
    case 'homepage_en':
        require('homepage_en.php');
    break;
    case '':
        require('homepage.php');
    break;
    default:
        echo '404';
    break;
}