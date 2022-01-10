<h1><?= $lesson['libelle']; ?></h1>
<p>Catégorie : <?= $categorie; ?></p>
<div>
    <?= nl2br($lesson['resume']); ?>
</div>
<?php if ($lesson['format'] == 1) {
            ?>
                <p>
                    <embed src="<?php echo BASE_URL; ?>assets/support/<?= nl2br(htmlspecialchars($lesson['lien'])) ?>" width=1270 height=900 type='application/pdf' />
                </p>
                
            <?php 
            echo "<embed src=assets/support/" .$lesson['lien'];
        } else {
            ?>
                <iframe width="1270" height="900" src="<?= nl2br(htmlspecialchars($lesson['lien'])) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php } ?>
<?php var_dump(__METHOD__); ?>

