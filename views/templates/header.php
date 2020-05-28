<!DOCTYPE html>
<html lang="fr">

<head>
    <title>L'hôtel Bogdanoff</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.min.css" />
</head>

<body>
    <header>

        <a href="<?php echo BASE_URL; ?>"><img class="logo" src="<?php echo BASE_URL; ?>assets/img/lemon.png" alt="logomenton" /></a>
        <h1 class="tittle">L'hôtel Bogdanoff</h1>
        <nav class="lien">
            <ul>
                <li><a class="bouton" href="<?php echo BASE_URL; ?>">Accueil</a></li>
                <li><a class="bouton" href="<?php echo BASE_URL; ?>chambre">Les chambres</a></li>
                <li><a class="bouton" href="<?php echo BASE_URL; ?>reservation">Réservation</a></li>
                <li><a class="bouton" href="<?php echo BASE_URL; ?>contact">Contact</a></li>
                <li><a class="bouton" href="<?php echo BASE_URL; ?>contact/acces">Acces</a></li>
                <li><a class="bouton" href="<?php echo BASE_URL; ?>services">Services</a></li>
            </ul>
        </nav>
        <div class="meteolang">
            <button id="myBtn">
                <img src="<?php echo BASE_URL; ?>assets/img/meteo.png" alt="meteo" width="70" />
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
                    <img src="<?php echo BASE_URL; ?>assets/img/fr.png" alt="lang" width="40px" height="40px" />
                </button>
                <div class="dropdown-content">
                    <a href="homepage.php"><img src="<?php echo BASE_URL; ?>assets/img/fr.png" alt="lang" width="40px" height="40px" /></a>
                    <a href="https://media.ouest-france.fr/v1/pictures/MjAyMDAzZTRiZjFiMDNlOTFlMzFiYmEyOGEwZjFkMTFkZjg1NTA?width=480&height=270&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=6f670ea58b920917c4a4a26798e950b6e8ca208da7bbb36aae484571e64f4c2b"><img src="<?php echo BASE_URL; ?>assets/img/ita.png" alt="lang" width="40px" height="40px" /></a>
                    <a href="homepage_en.php"><img src="<?php echo BASE_URL; ?>assets/img/eng.png" alt="lang" width="40px" height="40px" /></a>


                </div>
            </div>
        </div>
    </header>