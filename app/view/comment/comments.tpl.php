<h5>Kommentarer  <?=$numberOfComments?></h5>
<?php if (is_array($comments)) : ?>
        <?php foreach($comments as $id => $comment) :?>
        <div class='comment'>
                <p><span class="post-id">Inlägg #<?=$id?></span> Postat av <?=$comment['name']?> <?=date("Y-m-d H:i", $comment['timestamp'])?></p>
                <p><?=$comment['content']?></p>
                <p>[E-post:<?=$comment['mail']?>] [  Websida:<?=$comment['web']?> ]</p>
                <a class="button" href="<?= $this->url->create("comment/edit-view/$id/")?>">Editera inlägg</a>
        </div>
        <?php endforeach; ?>
<?php endif; ?>

