<?php
require_once( 'models/Bdd.php' );

class Admin
{

    public function connexionAdmin( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'SELECT * FROM admin WHERE email = :mail AND motdepasse = :password' );
        $result->execute( $params );

        return $result ? $result->fetch( PDO::FETCH_ASSOC ) : null;
    }

}
