<?php
require_once( 'models/Bdd.php' );

class Admin
{

    public function connexionAdmin( $mailconnect )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'SELECT * FROM admin WHERE mail = :mail' );
        $result->execute( [
            'mail' => $mailconnect,
        ] );

        return $result ? $result->fetch( PDO::FETCH_ASSOC ) : null;
    }

}
