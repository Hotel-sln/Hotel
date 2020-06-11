<?php
require('views/templates/header.php'); ?>
<main>
    <h1>Liste des chambres</h1>

    <hr />
    <a href="<?php echo BASE_URL; ?>admin/ajoutchambre">Ajouter une chambre</a>
    <hr />

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>chambre</th>
                <th>type_chambre</th>
                <th>prix</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chambres as $chambre) : ?>
                <tr>
                    <td><?php echo $chambre['id']; ?></td>
                    <td><?php echo $chambre['chambre']; ?></td>
                    <td><?php echo $chambre['type_chambre']; ?></td>
                    <td><?php echo $chambre['prix']; ?></td>
                    <td>
                        <a href="<?php echo BASE_URL; ?>admin/editchambre/<?php echo $chambre['id']; ?>"><i class="fas fa-edit"></i></a>&nbsp;
                        <a href="<?php echo BASE_URL; ?>admin/supprimechambre/<?php echo $chambre['id']; ?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</main>

    <?php require('views/templates/footer.php'); ?>
