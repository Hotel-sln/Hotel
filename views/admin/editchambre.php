<?php 

require('views/templates/header.php'); ?>

<main>
<div class="container">
    <h1>Modifier la <?php echo $chambre['type_chambre']; ?></h1>

    <form method="post">
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_type" id="txt_type" value="<?php echo $chambre['type_chambre']; ?>" required />
        </div>
        <div class="form_row">
            <input type="submit" value="Modifier" />
        </div>
    </form>
</div>
</main>


<?php require('views/templates/footer.php'); ?>
