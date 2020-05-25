<?php
// Récupération de la requête
define('BASE_URL', 'http://localhost/Hotel/');
$siteDirectory = '/Hotel/';
define('ADRESSE', '//'.$_SERVER['SERVER_NAME'].$siteDirectory);
$requestUri = str_replace('/Hotel/', '', $_SERVER['REQUEST_URI']);

// On sépare les paramètres de la requête
$requestParams = explode('/', $requestUri);

// Définition du contrôleur et de l'action
$controller = (!empty($requestParams[0]) ? ucfirst($requestParams[0])  : 'Homepage'). 'Controller';
$action = (!empty($requestParams[1]) ? $requestParams[1] : 'index'). 'Action';

if (file_exists('controllers/'. $controller . '.php')) {
    require('controllers/' . $controller . '.php');
    if (function_exists($action)) {
        $action();
    } else {
        require('404.php');
    }
} else {
    require('404.php');
}