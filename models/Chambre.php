<?php
require('models/Bdd.php');

class Chambre
{
    public function getChambres()
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM chambres ORDER BY id DESC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }
}