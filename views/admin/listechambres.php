<?php
require('views/templates/header.php'); ?>
<main>
    <h1>Liste des chambres</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>chambre</th>
                <th>type_chambre</th>
                <th>prix</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chambres as $chambre) : ?>
                <tr>
                    <td><?php echo $chambre['id']; ?></td>
                    <td><?php echo $chambre['chambre']; ?></td>
                    <td><?php echo $chambre['type_chambre']; ?></td>
                    <td><?php echo $chambre['prix']; ?></td>
                    <td><a href="<?php echo BASE_URL; ?>admin/editchambre/<?php echo $chambre['id']; ?>"><i class="fas fa-edit"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</main>
    <?php require('views/templates/footer.php'); ?>
