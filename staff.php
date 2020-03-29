<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create connection4
require_once('php/config.conf');

$conn = new PDO("mysql:host=" . $server . ";dbname=" . $name, $user, $passwd);



$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);






?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <title>L'hôtel Bogdanoff</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>

<body>

    <?php require_once('header.php'); ?>

    <main>
        <table>
            <tr>
                <th>id</th>
                <th>Email</th>
                <th>Date arrivée</th>
                <th>Date de sortie</th>
                <th>Chambre</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Date de réservation</th>
                <th> Modif</th>
            </tr>


        </table>

        <?php if ($result->rowCount() > 0) {

            // output data of each row
            while ($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo " 
                        <table>
                            <tr>
                                <td> " . $row["id"] . " </td> 
                                <td> " . $row["email"] . " </td>
                                <td> " . $row["date_entree"] . " </td>
                                <td> " . $row["date_depart"] . " </td>
                                <td> " . $row["chambre"] . " </td>
                                <td> " . $row["nom"] . " </td>
                                <td> " . $row["prenom"] . " </td>
                                <td> " . $row["phone"] . " </td>
                                <td> " . $row["adresse"] . " </td>
                                <td> " . $row["ville"] . " </td>
                                <td> " . $row["date_reservation"] . " </td>
                                <td > </td>
                            </tr> 
                            <tr class='none' >
                            <form method='post' action=''>
                            
                            <td>    <input id='id' type='text' name='id' value='" . $row["id"] . "' required /> </td>
                            <td>    <input id='Mail' type='email' name='mail' value='" . $row["email"] . "' required /> </td>
                            <td>    <input id='Ddd' type='text' name='Ddd' value='" . $row["date_entree"] . "' /> </td>
                            <td>    <input id='Ddf' type='text' name='Ddf' value='" . $row["date_depart"] . "' /> </td>
                            <td>    <input id='Chambres' type='text' name='Chambres' value='" . $row["chambre"] . "' /> </td>
                            <td>    <input id='Nom' type='text' name='Nom' value='" . $row["nom"] . "' required /> </td>
                            <td>    <input id='Prenom' type='text' name='Prenom' value='" . $row["prenom"] . "' required /> </td>
                                
                            <td>    <input id='Tel' type='text' name='Phone' value='" . $row["phone"] . "' maxlength='15' required /> </td>
                            <td>    <input id='Adresse' type='text' name='Adresse' value='" . $row["adresse"] . "' required /> </td>
                            <td>    <input id='Ville' type='text' name='Ville' value='" . $row["ville"] . "' maxlength='10' required /> </td>
                            <td>  </td>
                                
                            <td>    <input  class='button' name='forminscription' type='submit' value='Valider' /> </td>
                                
                            </form>
                            </tr>
                            </table>

                
                ";
               
            }
        } else {
            echo "0 results";
        } ?>

    </main>

    <?php require_once('footer.php'); ?>

</body>

<?php if (isset($_POST['forminscription'])) {
    if (!empty($_POST['Nom']) and !empty($_POST['Prenom']) and !empty($_POST['mail']) and !empty($_POST['Phone']) and !empty($_POST['Adresse']) and !empty($_POST['Ville']) and !empty($_POST['Ddd']) and !empty($_POST['Ddf'])) {

        $id = htmlspecialchars($_POST['id']);
        $Prenom = htmlspecialchars($_POST['Prenom']);
        $Nom = htmlspecialchars($_POST['Nom']);
        $mail = htmlspecialchars($_POST['mail']);
        $Phone = htmlspecialchars($_POST['Phone']);
        $Adresse = htmlspecialchars($_POST['Adresse']);
        $Ville = htmlspecialchars($_POST['Ville']);
        $Chambres = htmlspecialchars($_POST['Chambres']);
        $Ddd = htmlspecialchars($_POST['Ddd']);
        $Ddf = htmlspecialchars($_POST['Ddf']);
        $Date = NULL;


        $req = $conn->prepare("UPDATE reservations SET  email = :email , date_entree = :date_entree , date_depart = :date_depart , chambre = :chambre , nom = :nom , prenom = :prenom , phone = :phone , adresse = :adresse , ville = :ville , date_reservation = :date_reservation  WHERE id= $id ");
        $req->execute(array(
            
            'email' => $mail,
            'date_entree' => $Ddd,
            'date_depart' => $Ddf,
            'chambre' => $Chambres,
            'nom' => $Nom,
            'prenom' => $Prenom,
            'phone' => $Phone,
            'adresse' => $Adresse,
            'ville' => $Ville,
            'date_reservation' => $Date
        ));
        
        
    } else {
        $erreur = 'Des champs sont encore vide';
    }
}
?>



</html>