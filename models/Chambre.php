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
    
    public function getChambre($chambreId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM chambres where id = ' . $chambreId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }
}