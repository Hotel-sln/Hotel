<?php require('views/templates/header.php'); ?>
<main>

    <div class="container">
        <h1>Liste des chambres</h1>
            
        <?php foreach ($chambres as $chambre) : ?>
            <section class="chambre">
                <div class="photo">
                    <img src="<?php echo BASE_URL; ?>assets/img/<?php echo $chambre['imgs']; ?>" alt="<?php echo $chambre['chambre']; ?>" />
                </div>
                <div class="informations">
                    <h2><?php echo $chambre['chambre']; ?></h2>
                    <h3><?php echo $chambre['type_chambre']; ?></h3>
                    <h3><?php echo number_format($chambre['prix'], 0, ',', ' '); ?> €</h3>
                    <div class="description">
                        <?php echo $chambre['description']; ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>

    </div>

    <?php require('views/templates/footer.php'); ?>
    <!-- ici commence le contenu pour l'utilisateur-->
</main>