<?php 

require('views/templates/header.php'); ?>

<main>
<div class="container">
    <h1>Modifier la <?php echo $chambre['type_chambre']; ?></h1>

    <form method="post">
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_chambre" id="txt_chambre" value="<?php echo $chambre['chambre']; ?>" required />
        </div>
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_type" id="txt_type" value="<?php echo $chambre['type_chambre']; ?>" required />
        </div>
        <div class="form_row">
            <label for="txt_type">Type</label>
            <textarea type="text" name="txt_description" id="txt_description"  required ><?php echo $chambre['description']; ?></textarea>
        </div>
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_imgs" id="txt_imgs" value="<?php echo $chambre['imgs']; ?>" required />
        </div>
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_prix" id="txt_prix" value="<?php echo $chambre['prix']; ?>" required />
        </div>
        <div class="form_row">
            <input type="submit" name="forminscription2" id="forminscription2"  value="Modifier" />
        </div>
    </form>

</div>
</main>


<?php require('views/templates/footer.php'); ?>
