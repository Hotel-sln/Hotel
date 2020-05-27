<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once('php/config.conf');
$bdd = new PDO("mysql:host=" . $server . ";dbname=" . $name, $user, $passwd);


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




        if ($Ddd < $Ddf) {
            if (strtotime($Ddd) > strtotime($Date)) {
                $req = $bdd->prepare("INSERT INTO reservations (email, date_entree, date_depart, chambre, nom, prenom, phone, adresse, ville, date_reservation) VALUES(:email, :date_entree, :date_depart, :chambre, :nom, :prenom, :phone, :adresse, :ville, :date_reservation)");
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
}


?>

    <?php require_once('views/templates/header.php'); ?>

    <main class="reser">
        <div class="center">
            <div>
                <h3>Réservation</h3>

                <form method="post" action="">
                    <div class="form">
                        <label for="Nom">Nom :</label> <input id="Nom" type="text" name="Nom" placeholder="Nicolas" required />
                        <label for="Prenom">Prénom :</label> <input id="Prenom" type="text" name="Prenom" placeholder="Sarkozy" required />
                        <label for="Mail">Mail :</label> <input id="Mail" type="email" name="mail" placeholder="UMPforEver@bettencourt.fr" required />
                        <label for="Tel">Téléphone :</label> <input id="Tel" type="text" name="Phone" placeholder="05 55 ..." maxlength="15" required />
                        <label for="Adresse">Adresse :</label> <input id="Adresse" type="text" name="Adresse" placeholder="Palais de l'Élysée" required />
                        <label for="Ville">Ville :</label> <input id="Ville" type="text" name="Ville" placeholder="Neuilly-sur-Seine" maxlength="10" required />
                        <label for="Types">Types de Chambres :</label> <select id="Types" name="Chambres">
                            <option value="Chambre1">Chambres1</option>
                            <option value="Chambre2">Chambres2</option>
                            <option value="Chambre3">Chambres3</option>

                        </select>
                        <label for="Ddd">Date de début</label> <input id="Ddd" type="date" name="Ddd" />
                        <label for="Ddf">Date de fin</label> <input id="Ddf" type="date" name="Ddf" />
                        <input class="button" name="forminscription" type="submit" value="Valider" />
                        <?php
                        if (isset($erreur)) {
                            echo $erreur;
                        } elseif (isset($bravo)) {
                            echo $bravo;
                        }



                        ?>
                    </div>
                </form>
            </div>

        </div>
    </main>

    <?php require_once('views/templates/footer.php'); ?>