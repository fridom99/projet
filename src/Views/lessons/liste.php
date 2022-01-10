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

        <th scope="row">Modifier/effacer</th>
    </thead>
    <tbody>
        <?php foreach( $lessons as $lesson ): ?>
            <tr>
                <td scope="row"><?= $lesson['id']; ?></td>
                <td><a href="lessons/show/<?= $lesson['id']; ?>"><?= $lesson['libelle']; ?></a></td>
                <td><?= $lesson['id_categorie']; ?></td>
                <td><?= $lesson['format']; ?></td>
                <td><a href="assets/support/<?= nl2br(htmlspecialchars($lesson['lien'])) ?>"><?= $lesson['lien']; ?></a></td>
                <td><?= $lesson['date']; ?></td>
                <td><?= $lesson['statut']; ?></td>

        <td>
                    <a href="lessons/modify/<?= $lesson['id']; ?>"><i class="fas fa-pencil-alt btn btn-primary"></i></a>
                    &nbsp;
                    <a href="lessons/remove/<?= $lesson['id']; ?>"><i class="far fa-trash-alt btn btn-primary"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div>
    <a class="btn btn-primary" href="<?= BASE_URL; ?>lessons/add">Ajouter une leçon</a>
</div>
<!-- <?php var_dump(__METHOD__); ?> -->
