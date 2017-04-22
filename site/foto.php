<div  class="content">
    <h2> Наши фотоальбомы</h2>
    <hr>
    <div class="foto_div1">
        <?php
        $x = db::s("select * from foto order by a4 desc");
        foreach ($x as $j) {
            ?>
            <p>
                <a href="/фотоальбом/<?= $j->id; ?>">
                    <span class="multimedia_span1"><?= date('d.m.Y', strtotime($j->a4)); ?></span>  
                    <span class="multimedia_span2"> <?= $j->a1; ?> </span>

                </a>
            </p>
        <?php } ?>
    </div>
    <hr class="foto_hr">
    <?php
    if (a::u()[1] == "") {
        $id = db::r("select * from foto order by a4 desc limit 1")->id;
        $x = db::r("select * from foto where id=$id");
    } else {
        $id = a::u()[1];
        $x = db::r("select * from foto where id=$id");
    }
    ?>
    <span class="foto_span1"><?= date('d.m.Y', strtotime($x->a4)); ?></span>
    <span class="foto_span2"><?= $x->a1; ?></span>
    <div class="foto_div2">
        <?= $x->a3; ?>
    </div>
    <?php
    include "fancybox/f.php";
    ?>
</div>