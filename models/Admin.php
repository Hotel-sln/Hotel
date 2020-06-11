<?php
class Admin
{
    public function connexionAdmin($mailconnect)
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->prepare("SELECT * FROM admin WHERE email = ?");
        $result->execute(array($mailconnect));
        $userexist = $result->fetch();
        var_dump($userexist);
        return $userexist ;
    }
}
