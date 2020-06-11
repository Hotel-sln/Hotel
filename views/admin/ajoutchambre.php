<?php require('views/templates/header.php'); ?>

<main>
<div class="container">
    <h1>Ajouter une chambre</h1>

    <form method="post">
        <div class="form_row">
            <label for="txt_type">Nom</label>
            <input type="text" name="txt_chambre" id="txt_chambre" required />
        </div>
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_type" id="txt_type" required />
        </div>
        <div class="form_row">
            <label for="txt_type">Description</label>
            <textarea type="text" name="txt_description" id="txt_description"  required ></textarea>
        </div>
        <div class="form_row">
            <label for="txt_type">Photo</label>
            <input type="text" name="txt_imgs" id="txt_imgs" required />
        </div>
        <div class="form_row">
            <label for="txt_type">Prix</label>
            <input type="text" name="txt_prix" id="txt_prix" required />
        </div>
        <div class="form_row">
            <input type="submit" name="submit" id="submit"  value="Ajouter" />
        </div>
    </form>

</div>
</main>


<?php require('views/templates/footer.php'); ?>
