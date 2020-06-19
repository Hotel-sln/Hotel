<?php 
require( 'models/Chambre.php' );

function indexAction () {

ini_set('display_errors', 1);
error_reporting(E_ALL);




if (isset($_POST['forminscription'])) {

    if (!empty($_POST['Nom']) and !empty($_POST['Prenom']) and !empty($_POST['mail']) and !empty($_POST['Phone']) and !empty($_POST['Adresse']) and !empty($_POST['Ville']) and !empty($_POST['Ddd']) and !empty($_POST['Ddf'])) {


        $Prenom = htmlspecialchars($_POST['Prenom']);
        $Nom = htmlspecialchars($_POST['Nom']);
        $mail = htmlspecialchars($_POST['mail']);
        $Phone = htmlspecialchars($_POST['Phone']);
        $Adresse = htmlspecialchars($_POST['Adresse']);
        $Ville = htmlspecialchars($_POST['Ville']);
        $Chambres = htmlspecialchars($_POST['Chambres']);
        $Ddd = htmlspecialchars($_POST['Ddd']);
        $Ddf = htmlspecialchars($_POST['Ddf']);
        $Date = date('Y/m/d h:i:s ');
       
        // On transforme les 2 dates en timestamp
        $date3 = strtotime($Ddd);
        $date4 = strtotime($Ddf);
        
        // On récupère la différence de timestamp entre les 2 précédents
        $nbJoursTimestamp = $date4 - $date3;
        
        // ** Pour convertir le timestamp (exprimé en secondes) en jours **
        // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
        $nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24
        
        



        if ($Ddd < $Ddf) {
            if (strtotime($Ddd) > strtotime($Date)) {
                
                
                $bravo = 'La reservation a bien été effectuée';
            } else {
                $erreur = 'Verifier vos date V2';
            }
        } else {
            $erreur = 'Verifier vos date';
        }
    } else {
        $erreur = 'Des champs sont encore vides';
    }
    header('Location: ' . BASE_URL . 'reservation');
}



    require ('views/reservation/index.php');

}