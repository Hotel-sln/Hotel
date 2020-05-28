<?php 
require('views/templates/header.php'); ?>
<main>
<h1>Liste des chambres</h1>
<td>
<?php foreach ($chambres as $chambre) : ?>
    <tr> <?php echo $chambre['type_chambre']; ?> </tr>
<?php endforeach; ?> 
</td>
<?php require('views/template/footer.php'); ?>
</main>