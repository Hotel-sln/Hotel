<?php
require_once( 'models/Bdd.php' );

class Admin
{

    public function connexionAdmin( $mailconnect )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'SELECT * FROM admin WHERE email = :email' );
        $result->execute( [
            'email' => $mailconnect,
        ] );

        return $result ? $result->fetch( PDO::FETCH_ASSOC ) : null;
    }
    public function inscriptionAdmin($mailconnect,$mdpconnect) 
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();


        $mdpconnect = password_hash($mdpconnect, PASSWORD_DEFAULT);

        $req = $connection-> prepare("INSERT INTO admin (email, motdepasse, nom) VALUES(:email, :motdepasse, :nom)");
        $req->execute(array(
            'email' => $mailconnect,
            'motdepasse' => $mdpconnect,
            'nom' => 'Bruno'

        ));
    }

}
