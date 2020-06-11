<?php
session_start();
require( 'models/Chambre.php' );
require( 'models/Admin.php' );

function isConn()
{
    if( ! isset( $_SESSION["adminid"] ) ) {
        header( 'Location: ' . BASE_URL . 'admin/login' );
    }
}

function indexAction()
{
    isConn();
    require( "views/admin/index.php" );
}

function loginAction()
{
    if( isset( $_POST['formconnect'] ) ) {
        $mailconnect = htmlspecialchars( $_POST['mailconnect'] );
        $mdpconnect  = htmlspecialchars( $_POST['mdpconnect'] );

        $params = [
            'mail'     => $mailconnect,
            'password' => $mdpconnect,
        ];

        $admin  = new Admin();
        $result = $admin->connexionAdmin( $params );

        if( $result ) {
            $_SESSION['adminid']   = $result['id'];
            $_SESSION['adminmail'] = $result['mail'];
        }

        header( 'Location: ' . BASE_URL . 'admin/' );
    }

    require( "views/admin/login.php" );
}

function logoutAction()
{
    // 1. Détruire la session
    session_destroy();

    // 2. Redirection vers la page login
    Header( 'Location: ' . BASE_URL . 'admin/login' );
}

function listechambresAction()
{
    isConn();
    $chambreObject = new Chambre();
    $chambres      = $chambreObject->getChambres();
    $pageTitle     = 'Liste des chambres';
    require( 'views/admin/listechambres.php' );
}

function editchambreAction()
{
    isConn();
    $requestUri    = str_replace( BASE_URL, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $chambreId     = isset( $requestParams[2] ) ? $requestParams[2] : null;
    $chambreObject = new Chambre();
    $chambre       = $chambreObject->getChambre( $chambreId );

    if( isset( $_POST['forminscription2'] ) ) {
        $chambreObject->changeChambre( $chambreId );
        header( 'Location: ' . BASE_URL . 'admin/editchambre/' . $chambre['id'] . '' );
    }

    $pageTitle = 'Modifier une chambre';
    require( 'views/admin/editchambre.php' );
}

function ajoutchambreAction()
{
    isConn();
    if( isset( $_POST['submit'] ) ) {
        // 1. Récupération des données du formulaire
        $chambreNom         = htmlspecialchars( $_POST['txt_chambre'] );
        $chambreType        = htmlspecialchars( $_POST['txt_type'] );
        $chambreDescription = htmlspecialchars( $_POST['txt_description'] );
        $chambrePhoto       = htmlspecialchars( $_POST['txt_imgs'] );
        $chambrePrix        = htmlspecialchars( $_POST['txt_prix'] );

        $params = array(
            'chambre'      => $chambreNom,
            'type_chambre' => $chambreType,
            'description'  => $chambreDescription,
            'imgs'         => $chambrePhoto,
            'prix'         => $chambrePrix,
        );

        // 2. Appel du modèle
        $chambreObject = new Chambre();
        $chambreObject->ajouterChambre( $params );

        // 3. Redirection vers la liste des chambres
        Header( 'Location: ' . BASE_URL . 'admin/listechambres' );
    }

    $pageTitle = 'Ajouter une chambre';
    require( 'views/admin/ajoutchambre.php' );
}

function supprimechambreAction()
{
    isConn();
    $requestUri    = str_replace( BASE_URL, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $chambreId     = isset( $requestParams[2] ) ? $requestParams[2] : null;

    $chambreObject = new Chambre();
    $chambreObject->supprimerChambre( $chambreId );

    Header( 'Location: ' . BASE_URL . 'admin/listechambres' );
}
