<header>

    <a href="homepage.php"><img class="logo" src="assets/img/lemon.png" alt="logomenton" /></a>
    <h1 class="tittle">L'hôtel Bogdanoff</h1>
    <nav class="lien"><a class="bouton" href="/<?php echo ADRESSE ?>"> Accueil </a></nav>
    <nav class="lien"><a class="bouton" href="chambre.php">Les chambres </a></nav>
    <nav class="lien"><a class="bouton" href="reservation.php">Réservation</a></nav>
    <nav class="lien"><a class="bouton" href="">A venir</a></nav>
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
</header>