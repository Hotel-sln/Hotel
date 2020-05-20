<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Bogdanoff Hotel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>

<body>
    <!-- ici commence le contenu pour l'utilisateur-->

    <?php require_once('header_en.php'); ?>

    <main>
        <section id="banniere">
            <img src="assets/img/menton-colorer.jpg" alt="image bannière" class="bannier" />
        </section>

        <section class="descriptionville">
            <article>
                <p>
                    Preserved city, located on the borders of Italy, the Principality of Monaco
                    of Monaco and the County of Nice, Menton enjoys a microclimate
                    subtropical benefactor who almost makes him ignore winter. Menton is classified as a "resort of tourist interest". This status allows
                    among others, retail businesses to open on Sundays. Discover
                    Menton, is to let oneself be seduced by the serenity and the
                    charm of a place like no other. In this privileged land,
                    Landlocked and yet open to the world, nothing is ordinary.
                    For anyone who takes the trouble to understand the city, its history and the
                    the generosity of its inhabitants, which can be guessed at every corner of the
                    ocre alleyways heated by the azure sun, a rare humanism can then be found. He shows us the way to harmony, to that happiness...
                    simple but dreamlike, which Albert Camus described as "l'accord de la terre et du pied". City of Art and History, Garden City and also
                    still a city of culture, Menton is a preserved Eden which does not have any
                    looks no less towards his future on the Riviera, succeeding
                    the perfect alchemy between all the beauties of the world. <br />
                    Welcome to Menton where, nothing, really nothing is plain.
                </p>
            </article>

            <aside>
                <img src="assets/img/baie-de-menton.jpg" alt="photo menton" class="menton" />
            </aside>
        </section>

        <div id="slider">
            <button class="prev sliderbutton">&lt;</button>
            <button class="next sliderbutton">&gt;</button>
            <div class="slide">
                <img src="assets/img/chambre.jpg" alt="chambre" />
            </div>
            <div class="slide">
                <img src="assets/img/resto.jpg" alt="resto" />
            </div>
            <div class="slide">
                <img src="assets/img/piscine.jpg" alt="piscine" />
            </div>
            <div class="slide">
                <img src="assets/img/hall.jpg" alt="hall" />
            </div>
        </div>

        <section class="services">
            <div>
                <p>
                    <img src="assets/img/parking.png" alt="parking" title="Parking gratuit et sécurisé" class="logo" />
                </p>
                <p>
                    Free parking<br />
                    and security
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/handicape.png" alt="accessibilité" title="Accessibilité aux personnes handicapées" class="logo" />
                </p>
                <p>
                    Accessible
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/lit.png" alt="chambre" title="Chambre" class="logo" />
                </p>
                <p>
                    Room
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/restauration.png" alt="restauration" title="Restauration" class="logo" />
                </p>
                <p>
                    Restauration
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/wifi.png" alt="wifi" title="Wifi gratuit" class="logo" />
                </p>
                <p>
                    Free WiFi
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/animaux.png" alt="animaux" title="Animaux acceptés" class="logo" />
                </p>
                <p>Animals allowed</p>
            </div>

            <div>
                <p>
                    <img src="assets/img/piscine.png" alt="piscine" title="Piscine chauffée" class="logo" />
                </p>
                <p>
                    Pool with heating
                </p>
            </div>
        </section>
    </main>

    <footer class="footermain">
        <ul class="feetlist">
            A question? Reach out to us :
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="assets/js/diapo.js"></script>

    <script src="assets/js/scripts.js"></script>
</body>

</html>