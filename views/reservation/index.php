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

                        
                       <?php if (isset($nbJours)) {
                        echo "Nombre de nuit choisit : ".$nbJours;
                        }
                     ?>
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