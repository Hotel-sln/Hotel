<!DOCTYPE html>

<head>
    <title>Chambres</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>

<body>
    <?php require_once('header.php'); ?>

    <main class="reser">
        <div class="center">
            <div>
                <h3>Réservation</h3>

                <form>
                    <div class="form">
                        <label>Nom :</label> <input type="text" name="pseudo" required />
                            <label>Prénom :</label> <input type="text" name="pseudo" required />
                        <label>Mail :</label> <input type="text" name="pseudo" required />
                            <label>Téléphone :</label> <input type="text" name="pseudo" required />
                        
                        <label>Adresse :</label> <input type="text" name="pseudo" required />
                            <label>Ville :</label> <input type="text" name="pseudo" required />

                        

                        <label>Types de Chambres :</label> <select name="pays" id="pays">
                                <option value="france">Chambres1</option>
                                <option value="espagne">Chambres2</option>
                                <option value="italie">Chambres2</option>

                            </select>
                        <label>Date de début</label> <input type="date" name="pseudo" required />
                        <label>Date de fin</label> <input type="date" name="pseudo" required />
                        <input class="button" type="submit" value="Envoyer" />
                    </div>

                </form>
            </div>

        </div>
    </main>



    <?php require_once('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
</body>

</html>