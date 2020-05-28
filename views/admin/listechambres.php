<?php 
require('views/templates/header.php'); ?>
<main>
<h1>Liste des chambres</h1>
<ul>
<?php foreach ($chambres as $chambre) : ?>
    <li> <?php echo $chambre['type_chambre']; ?> </li>
<?php endforeach; ?> 
</ul>
<?php require('views/template/footer.php'); ?>
</main>