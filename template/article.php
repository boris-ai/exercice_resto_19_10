<?php $post = $db->myPrepare("SELECT nom, description, prix, image FROM plats WHERE id_plat=?", [$_GET['id_plat']],'Article', true) ?>
    <?php var_dump($post); ?>

    <div id="articleSolo">
        <h2><?= $post->nom ?></h2>
        <h2><?= $post->description ?></h2>
        <h4><?= $post->prix ?></h4>
        <img class="imgMenu" src="src/images/<?= $post->image?>">
        <div><a href="index.php">Retour</a></div>
    </div>
