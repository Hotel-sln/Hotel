<?php
require('models/Chambre.php');
require('models/Admin.php');
function listechambresAction()
{
    
    if(!isset($_COOKIE["adminid"]) && (!isset($_COOKIE["adminmail"]))){

        header('Location: ' . BASE_URL . 'admin/login');
      }
    $chambreObject = new Chambre();
    $chambres      = $chambreObject->getChambres();
    $pageTitle     = 'Liste des chambres';
    require('views/admin/listechambres.php');
}

function editchambreAction()
{
    
    if(!isset($_COOKIE["adminid"]) && (!isset($_COOKIE["adminmail"]))){

        header('Location: ' . BASE_URL . 'admin/login');
      }
    $requestUri    = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $chambreId     = isset($requestParams[2]) ? $requestParams[2] : null;
    $chambreObject = new Chambre();
    $chambre       = $chambreObject->getChambre($chambreId);

    if (isset($_POST['forminscription2'])) {
        $chambreObject->changeChambre($chambreId);
        header('Location: ' . BASE_URL . 'admin/editchambre/' . $chambre['id'] . '');
    }

    $pageTitle = 'Modifier une chambre';
    require('views/admin/editchambre.php');
}

function ajoutchambreAction()
{
    
    if(!isset($_COOKIE["adminid"]) && (!isset($_COOKIE["adminmail"]))){

        header('Location: ' . BASE_URL . 'admin/login');
      }
    if (isset($_POST['submit'])) {
        // 1. Récupération des données du formulaire
        $chambreNom         = htmlspecialchars($_POST['txt_chambre']);
        $chambreType        = htmlspecialchars($_POST['txt_type']);
        $chambreDescription = htmlspecialchars($_POST['txt_description']);
        $chambrePhoto       = htmlspecialchars($_POST['txt_imgs']);
        $chambrePrix        = htmlspecialchars($_POST['txt_prix']);

        $params = array(
            'chambre'      => $chambreNom,
            'type_chambre' => $chambreType,
            'description'  => $chambreDescription,
            'imgs'         => $chambrePhoto,
            'prix'         => $chambrePrix,
        );

        // 2. Appel du modèle
        $chambreObject = new Chambre();
        $chambreObject->ajouterChambre($params);

        // 3. Redirection vers la liste des chambres
        Header('Location: ' . BASE_URL . 'admin/listechambres');
    }

    $pageTitle = 'Ajouter une chambre';
    require('views/admin/ajoutchambre.php');
}

function supprimechambreAction()
{
    
   
    if(!isset($_COOKIE["adminid"]) && (!isset($_COOKIE["adminmail"]))){

        header('Location: ' . BASE_URL . 'admin/login');
      }
    $requestUri    = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $chambreId     = isset($requestParams[2]) ? $requestParams[2] : null;

    $chambreObject = new Chambre();
    $chambreObject->supprimerChambre($chambreId);

    Header('Location: ' . BASE_URL . 'admin/listechambres');
}

function loginAction()
{
    

    
    if(isset($_COOKIE["adminid"]) && (isset($_COOKIE["adminmail"]))){

        header('Location: ' . BASE_URL . 'admin/listechambres');
      }
    if (isset($_POST['formconnect'])) {
        $mailconnect =  htmlspecialchars($_POST['mailconnect']);
        $admin = new Admin();
        $result = $admin->connexionAdmin($mailconnect);
        
       
        if ($_POST['mdpconnect'] == $result['motdepasse']) { 
           
            setcookie('adminid', $result['id']);
            setcookie('adminmail', $result['email']);
           
            
            header('Location: ' . BASE_URL . 'admin/login');
            
            
        }
    }
    require("views/admin/login.php");
}