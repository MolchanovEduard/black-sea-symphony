<div class="content">
    <?php
    if (a::u()[1] == "") {
        $id = db::r("select * from video order by a4 desc limit 1")->id;
        $n = db::r("select * from video where id='$id'");
    } else {
        $id = a::u()[1];
        $n = db::r("select * from video where id=$id");
    }
    ?>
    <h4 class="video_h4"><?= $n->a4; ?></h4>
    <h3>   <?= $n->a1; ?>.</h3><br>
    <div class="video_div1">
        <?= $n->k; ?>
    </div>
    <h3> <?= $n->a3; ?></h3>
    <hr>
    <h3 class="video_h3">Каталог видео</h3>

    <div class="video_div2"
        <?php
        $x = db::s("select * from video order by a4 desc");
        foreach ($x as $j) {
            ?>
            <p>
                <a href="/видео/<?= $j->id; ?>">
                    <span class="multimedia_span1"><?= $j->a4; ?></span>  
                    <span class="multimedia_span2"> <?= $j->a1; ?> </span>

                </a>
            </p>
        <?php } ?>
    </div>
</div>