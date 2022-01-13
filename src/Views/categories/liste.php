<h1>Liste des categories</h1>
<table class="table table-hover">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Libellé</th>
        <th scope="row">Actions</th>
    </thead>
    <tbody>
        <?php foreach( $categories as $categorie ): ?>
            <tr>
                <td scope="row"><?= $categorie['id']; ?></td>
                <td><?= $categorie['libelle']; ?></td>
                <td>
                    <!-- <a href="categories/show/<?= $categorie['id']; ?>"><i class="far fa-eye btn btn-info"></i></a>
                    &nbsp; -->
                    <?php if ($_SESSION['user']['role'] == 'admin') : ?>
                    <a href="categories/modify/<?= $categorie['id']; ?>"><i class="fas fa-pencil-alt btn btn-primary"></i></a>
                    &nbsp;
                    <a href="categories/remove/<?= $categorie['id']; ?>"><i class="far fa-trash-alt btn btn-primary"></i></a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php if ($_SESSION['user']['role'] == 'admin') : ?>
<div>
    <a class="btn btn-primary" href="<?= BASE_URL; ?>categories/add">Ajouter une categorie</a>
</div>
<?php endif; ?>

