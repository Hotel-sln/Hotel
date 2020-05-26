<?php
require('config/bdd.php');

class Bdd
{
    public function getConnection()
    {
        try {
            $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (Exception $errorConnection) {
            die('Erreur de connection :'.$errorConnection->getMessage());
        }
    }
}