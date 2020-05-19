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
                $bravo = 'Your booking has succesfully been recorded';
            } else {
                $erreur = 'Verifier vos date V2';
            }
        } else {
            $erreur = 'Verifier vos date';
        }
    } else {
        $erreur = 'Des champs sont encore vide';
    }
}

?>

<!DOCTYPE html>

<head>
    <title>Chambres</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>

<body>
    <header>
        <a href="homepage_en.php"><img class="logo" src="assets/img/lemon.png" alt="logomenton" /></a>
        <h1 class="tittle">Bogdanoff Hotel</h1>
        <nav class="lien"><a class="bouton" href="homepage_en.php"> Home </a></nav>
        <nav class="lien"><a class="bouton" href="room.php">Bedroom</a></nav>
        <nav class="lien"><a class="bouton" href="reservation_en.php">Booking</a></nav>
        <nav class="lien"><a class="bouton" href="">More to come</a></nav>
        <div class="meteolang">
            <button id="myBtn">
                <img src="assets/img/meteo.png" alt="meteo" width="70%" height="90%" />
            </button>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="closex"><span class="close">&times;</span></div>
                    <div class="meteo">
                        <p>
                            <iframe seamless width="100%" height="336" frameborder="0" src="https://www.infoclimat.fr/public-api/mixed/iframeSLIDE?_ll=43.77649,7.50435&_inc=WyJNZW50b24iLCIxNyIsIjI5OTQ0OTciLCJGUiJd&_auth=BB4DFA5wU3EALQE2DnhWfwJqUmcAdgAnVipSMQtlVyoEYFY1BGFcOgBmVCkFKlVmUn8CZwE%2BBzsHZwFjDnxTLwRlA24OZFM1AGsBag45Vn0CLlIvAD4AJ1YqUjQLY1c9BHlWMwRnXD4AcVQ1BTBVf1JlAmsBIQcgB2UBYw5rUzMEbgNjDm1TMwBuAWcOIVZ9AjRSZwA5ADFWNVI3C2FXMgRiVjsEMVw8AGdUNwUrVWVSaQJnAT8HNgdhAWEOZVMvBHgDHg4eUywALwEhDmtWJAIsUmcAYQBs&_c=c88c412412dc0f8ed4548f9f4050993b"></iframe>
                        </p>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button>
                    <img src="assets/img/fr.png" alt="lang" width="40px" height="40px" />
                </button>
                <div class="dropdown-content">
                    <a href="homepage.php"><img src="assets/img/fr.png" alt="lang" width="40px" height="40px" /></a>
                    <a href="https://media.ouest-france.fr/v1/pictures/MjAyMDAzZTRiZjFiMDNlOTFlMzFiYmEyOGEwZjFkMTFkZjg1NTA?width=480&height=270&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=6f670ea58b920917c4a4a26798e950b6e8ca208da7bbb36aae484571e64f4c2b"><img src="assets/img/ita.png" alt="lang" width="40px" height="40px" /></a>
                    <a href="homepage_en.php"><img src="assets/img/eng.png" alt="lang" width="40px" height="40px" /></a>
                </div>
            </div>
        </div>
    </header>



    <main class="reser">
        <div class="center">
            <div>
                <h3>Booking</h3>

                <form method="post" action="">
                    <div class="form">
                        <label for="Nom">Last name :</label> <input id="Nom" type="text" name="Nom" placeholder="Nicolas" required />
                        <label for="Prenom">First name :</label> <input id="Prenom" type="text" name="Prenom" placeholder="Sarkozy" required />
                        <label for="Mail">Email :</label> <input id="Mail" type="email" name="mail" placeholder="UMPforEver@bettencourt.fr" required />
                        <label for="Tel">Phone :</label> <input id="Tel" type="text" name="Phone" placeholder="05 55 ..." maxlength="15" required />

                        <label for="Adresse">Adress :</label> <input id="Adresse" type="text" name="Adresse" placeholder="Palais de l'Élysée" required />
                        <label for="Ville">City :</label> <input id="Ville" type="text" name="Ville" placeholder="Neuilly-sur-Seine" maxlength="10" required />

                        <label for="Types">Room type :</label> <select id="Types" name="Chambres">
                            <option value="Chambre1">Room 1</option>
                            <option value="Chambre2">Room 2</option>
                            <option value="Chambre3">Room 3</option>
                        </select>
                        <label for="Ddd">Start date</label> <input id="Ddd" type="date" name="Ddd" />
                        <label for="Ddf">End date</label> <input id="Ddf" type="date" name="Ddf" />
                        <input class="button" name="forminscription" type="submit" value="Validate" />
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
    <footer class="footermain">
        <ul class="feetlist">
            A question? Reach out to us:
            <li class="feetelem">9 impasse du Scie Tronc</li>
            <li class="feetelem">(+33)04 69 42 06 91</li>
            <li class="feetelem">Hotel-Menton@hotmail.fr</li>
            <li class="feetelem">
                <span class="network">
                    <button class="btnfeet" onclick="window.location.href = 'https://twitter.com/';">
                        <i class="fab fa-twitter-square fa-2x"> </i>
                    </button>
                    <button class="btnfeet" onclick="window.location.href = 'https://www.facebook.com/';">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </button>
                    <button class="btnfeet" onclick="window.location.href = 'https://www.instagram.com/';">
                        <i class="fab fa-instagram fa-2x"></i>
                    </button>
                </span>
            </li>
        </ul>
        <img class="feetpic" src="assets/img/Blason_ville_fr_Menton.svg.png" alt="logo" />

        <aside class="legal">
            <img class="icon_royal" src="assets/img/citron.png" alt="logo_citron" />
            Terms - Site map - © L'escadev
        </aside>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
</body>

</html>