<?php
require_once( 'models/Bdd.php' );

class Chambre
{

    public function getChambres()
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();
        $result     = $connection->query( 'SELECT * FROM chambres ORDER BY id DESC' );

        return $result ? $result->fetchAll( PDO::FETCH_ASSOC ) : null;
    }

    public function getChambre( $chambreId )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();
        $result   = $connection->query( 'SELECT * FROM chambres where id = ' . $chambreId );

        return $result ? $result->fetch( PDO::FETCH_ASSOC ) : null;
    }

    public function changeChambre( $chambreId )
    {
        $Chambre = htmlspecialchars( $_POST['txt_chambre'] );

        $ChambreTypes = htmlspecialchars( $_POST['txt_type'] );
        $Description  = htmlspecialchars( $_POST['txt_description'] );
        $Imgs         = htmlspecialchars( $_POST['txt_imgs'] );
        $Prix         = htmlspecialchars( $_POST['txt_prix'] );

        $bdd        = new Bdd();
        $connection = $bdd->getConnection();
        $result     =
            $connection->prepare( "UPDATE chambres SET  chambre = :chambre , type_chambre = :type_chambre , description = :description , imgs = :imgs , prix = :prix  WHERE id= $chambreId " );
        $result->execute( array(

            'chambre'      => $Chambre,
            'type_chambre' => $ChambreTypes,

            'description' => $Description,
            'imgs'        => $Imgs,
            'prix'        => $Prix,

        ) );
    }

    public function ajouterChambre( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'INSERT INTO chambres(chambre, type_chambre, description, imgs, prix) VALUES(:chambre, :type_chambre, :description, :imgs, :prix)' );
        $result->execute( $params );
    }

    public function supprimerChambre( $id )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'DELETE FROM chambres WHERE id = :id' );
        $result->execute( array(
            'id' => $id,
        ) );
    }

}
