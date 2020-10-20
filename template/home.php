
<div id="exemplePlat">
        <?php foreach($db->myQuery('SELECT * FROM plats ORDER BY id_plat DESC LIMIT 3','Article') as $post) :  ?>

            <div id="articleSushi">
                <h2><a href="<?= $post->getURL() ?>"><?= $post->nom ?></a></h2></div>

                <h3><div><?= $post->getExtrait() ?></div></h3>
                <img class="imgMenu" src="src/images/<?= $post->image?>">
            </div>

        <?php endforeach; ?>
</div>
<div id="lienFullmenu"><a href="index.php?action=full">Voulez vous consulter tous nos plats ?</a></div>

