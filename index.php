<?php
// Récupération de la requête
$requestUri = str_replace('/Hotel/', '', $_SERVER['REQUEST_URI']);

// On sépare les paramètres de la requête
$requestParams = explode('/', $requestUri);

// Définition du contrôleur et de l'action
$controller = ucfirst($requestParams[0]) . 'Controller';
$action = isset($requestParams[1]) ? $requestParams[1] . 'Action' : '';

// Si aucun paramètre, alors on affiche la page d'accueil
if (empty($requestParams[0])) {
    if (file_exists('controllers/HomepageController.php')) {
        require('controllers/HomepageController.php'); 
        if (function_exists('indexAction')) {
            indexAction();
        } else {
            require('404.php');
        }
    }
} else {
    // Va chercher le contrôleur ou renvoie une page 404 s'il n'existe pas
    if (file_exists('controllers/'. $controller . '.php')) {
        require('controllers/' . $controller . '.php');

        // Appelle l'action ou renvoie une page 404 si elle n'existe pas
        if (function_exists($action)) {
            $action();
        } else {
            require('404.php');
        }
    } else {
        require('404.php');
    }
}