
<div id="exemplePlat">
    <?php foreach($db->myQuery('SELECT * FROM plats ORDER BY id_plat ASC','Article') as $post) :  ?>

    <div id="articleSushi">
        <h2><a href="<?= $post->getURL() ?>"><?= $post->nom ?></a></h2></div>

        <h3><div><?= $post->getExtrait() ?></div></h3>
        <img class="imgMenu" src="src/images/<?= $post->image?>">
    </div>

    <?php endforeach; ?>
</div>
<div><a href="index.php">Retour</a></div>