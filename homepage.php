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
    <!-- ici commence le contenu pour l'utilisateur-->


    <?php require_once('includes/header.php'); ?>


    <main>
        <section id="banniere">
            <img src="assets/img/menton-colorer1.jpg" alt="image bannière" class="bannier" />
        </section>

        <section class="descriptionville">
            <article>
                <p>
                    Ville préservée, située aux confins de l’Italie, de la Principauté
                    de Monaco et du Comté de Nice, Menton bénéficie d’un microclimat
                    subtropical bienfaiteur qui lui fait presque ignorer l’hiver. Menton
                    est classée « station d’intérêt touristique ». Ce statut permet
                    entre autres aux commerces de détail d’ouvrir le dimanche. Découvrir
                    Menton ou y vivre, c’est se laisser séduire par la sérénité et le
                    charme d’un lieu à nul autre pareil. Sur cette terre privilégiée,
                    enclavée et pourtant ouverte sur le monde, rien n’est ordinaire.
                    Pour qui prend la peine de comprendre la cité, son histoire et la
                    générosité de ses habitants, que l’on devine à chaque recoin des
                    ruelles ocre chauffées par le soleil azuré, un humanisme rare se
                    révèle alors. Il nous montre le chemin de l’harmonie, de ce bonheur
                    simple mais onirique qu’Albert Camus a décrit comme « l’accord de la
                    terre et du pied ». Ville d’Art et d’Histoire, ville jardin ou
                    encore ville de culture, Menton est un Eden préservé qui n’en
                    regarde pas moins vers son avenir sur la Riviera, réussissant
                    l’alchimie parfaite entre toutes les beautés du monde. <br />
                    Bienvenue à Menton où, vraiment, rien n’est ordinaire.
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
                <img src="assets/img/resto1.png" alt="resto" />
            </div>
            <div class="slide">
                <img src="assets/img/piscine.jpg" alt="piscine" />
            </div>
            <div class="slide">
                <img src="assets/img/hall1.jpg" alt="hall" />
            </div>
        </div>

        <section class="services">
            <div>
                <p>
                    <img src="assets/img/parking.png" alt="parking" title="Parking gratuit et sécurisé" class="logo" />
                </p>
                <p>
                    Parking gratuit<br />
                    et sécurisé
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/handicape.png" alt="accessibilité" title="Accessibilité aux personnes handicapées" class="logo" />
                </p>
                <p>
                    Accessibilité
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/lit.png" alt="chambre" title="Chambre" class="logo" />
                </p>
                <p>
                    Chambre
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
                    Wifi gratuit
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/animaux.png" alt="animaux" title="Animaux acceptés" class="logo" />
                </p>
                <p>
                    Animaux acceptés
                </p>
            </div>

            <div>
                <p>
                    <img src="assets/img/piscine.png" alt="piscine" title="Piscine chauffée" class="logo" />
                </p>
                <p>
                    Piscine chauffée
                </p>
            </div>
        </section>
    </main>

    <?php require_once('includes/footer.php'); ?>

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