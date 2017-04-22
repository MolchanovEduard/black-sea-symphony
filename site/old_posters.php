<link rel="stylesheet" type="text/css" href="/site/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/site/css/component.css" />
<script src="site/js/modernizr.custom.js"></script>

<?php
$x = db::s("select * from posters order by a4 desc limit 3");
?>



<style>
    /*************************************
    Posters and still images
    **************************************/

    .scene:nth-child(1) .movie .poster {
        background-image: url(/img/poster01.jpg);
    }

    .scene:nth-child(2) .poster {
        background-image: url(/img/poster02.jpg);
    }

    .scene:nth-child(3) .poster {
        background-image: url(/img/poster03.jpg);
    }

    .scene:nth-child(1) .info header {
        background-image: url(/img/still01.jpg);
    }

    .scene:nth-child(2) .info header {
        background-image: url(/img/still02.jpg);
    }

    .scene:nth-child(3) .info header {
        background-image: url(/img/still03.jpg);
    }



</style>

<div id="content" style="box-shadow:15px 10px 15px rgba(0,0,0,0.5); border-radius: 10px; height: 650px; width: 1080px; padding-top: 10px;" class="content">

    <h2>Афиша</h2>
    <hr>
    <br>

    <div class="container" style="margin-top: -100px">
        <!-- Top Navigation -->


        <div class="wrapper">	

            <ul class="stage clearfix">

                <li class="scene ">
                    <div class="movie" onclick="return true">
                        <div class="poster "></div>
                        <div class="info">
                            <header>

                                <span class="year">2014</span>

                                <span class="duration"> Севастополь</span>
                            </header>
                            <p>
                                23 ноября 2014 г - Севастополь
                            </p>
                        </div>
                    </div>
                </li>

                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster"></div>
                        <div class="info">
                            <header>

                                <span class="year">2014</span>

                                <span class="duration"> Ялта</span>
                            </header>
                            <p>
                                16 ноября 2014 г - Ялта
                            </p>
                        </div>
                    </div>
                </li>

                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster"></div>
                        <div class="info">
                            <header>

                                <span class="year">2014</span>

                                <span class="duration"> Симферополь</span>
                            </header>
                            <p>
                                26 октября 2014 г - Симферополь
                            </p>
                        </div>
                    </div>
                </li>


            </ul>




        </div><!-- /wrapper -->


    </div><!-- /container -->

</div>


