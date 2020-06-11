<?php
require( 'models/Chambre.php' );

function listechambresAction()
{
    $chambreObject = new Chambre();
    $chambres      = $chambreObject->getChambres();
    $pageTitle     = 'Liste des chambres';
    require( 'views/admin/listechambres.php' );
}

function editchambreAction()
{
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
    $requestUri    = str_replace( BASE_URL, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $chambreId     = isset( $requestParams[2] ) ? $requestParams[2] : null;

    $chambreObject = new Chambre();
    $chambreObject->supprimerChambre( $chambreId );

    Header( 'Location: ' . BASE_URL . 'admin/listechambres' );
}
