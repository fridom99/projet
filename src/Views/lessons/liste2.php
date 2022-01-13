<h1>Liste des leçons</h1>
<table class="table table-hover">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Libellé</th>
        <th scope="col">Catégorie</th>
        <th scope="col">PDF/Vidéo</th>
        <th scope="col">Lien</th>
        <th scope="col">Date</th>
        <th scope="col">Visible</th>
        <?php if ($_SESSION['user']['role'] == 'admin') : ?>
            <th scope="row">Modifier/effacer</th>
        <?php endif; ?>
    </thead>
    <tbody>
        <?php foreach ($lessons as $lesson) : ?>
            <tr>
                <td scope="row"><?= $lesson['id']; ?></td>
                <td><a><?= $lesson['libelle']; ?></a></td>
                <td><?= $lesson['id_categorie']; ?></td>
                <td><?php if ($lesson['format'] == 1) : ?><i class="far fa-file-pdf fa-2x"></i><?php else : ?><i class="fab fa-youtube fa-2x"></i><?php endif; ?></td>
                <td><?= $lesson['lien']; ?></td>
                <td><?= $lesson['date']; ?></td>
                <td><?= $lesson['statut']; ?></td>
                <?php if ($_SESSION['user']['role'] == 'admin') : ?>
                    <td>

                        <a href="lessons/modify/<?= $lesson['id']; ?>"><i class="fas fa-pencil-alt btn btn-primary"></i></a>
                        &nbsp;
                        <a href="lessons/remove/<?= $lesson['id']; ?>"><i class="far fa-trash-alt btn btn-primary"></i></a>

                    </td>
                <?php endif; ?>
            </tr>

            <!-- <div class="card col-3" style="width: 18rem;">
            <?php if ($lesson['format'] == 1) : ?><i class="far fa-file-pdf fa-2x"></i><?php else : ?><i class="fab fa-youtube fa-2x"></i><?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $lesson['libelle']; ?></h5>
                    <p class="card-text"><?= $lesson['lien']; ?><br><?= $lesson['date']; ?></p>
                    <a href="lessons/show/<?= $lesson['id']; ?>" class="btn btn-primary"><?= $lesson['libelle']; ?></a><a href="lessons/modify/<?= $lesson['id']; ?>"><i class="fas fa-pencil-alt btn btn-primary"></i></a>
                        &nbsp;
                        <a href="lessons/remove/<?= $lesson['id']; ?>"><i class="far fa-trash-alt btn btn-primary"></i></a>
                </div>
            </div> -->

        <?php endforeach; ?>
    </tbody>
</table>
<?php if ($_SESSION['user']['role'] == 'admin') : ?>
    <div>
        <a class="btn btn-primary" href="<?= BASE_URL; ?>lessons/add">Ajouter une leçon</a>
    </div>
<?php endif; ?>
<!-- <?php var_dump(__METHOD__); ?> -->