<?php
$id = a::u()[1];
$x = db::r("select * from posters where id=$id");
?>
<div class="content">
    <h2><?= $x->a1; ?></h2>
    <hr>
    <span class="concert_span"><?= date('d.m.Y', strtotime($x->a4)); ?></span>
    <img class="concert_img" src="/posters/<?= $x->img1; ?>" width="500" />
    <p class="concert_p">
        <?= $x->a3; ?>
    </p>
    <div class="concert_div">
        <a href="/концерты" class="concert_a"> Каталог всех концертов ... </a>
    </div>
</div>