<?php

class a {

    const SiteOpen = 'select site from site where id=1';
    const SiteUnderConstruction = 'site/site-under-construction.php';

    public static function start() {
        $site = db::r(self::SiteOpen)->site;

        if ($site == TRUE) {
            return self::route();
        } else {
            return include_once self::SiteUnderConstruction;
        }
    }

    public static function route() {

        $p = self::u()[0];  // $p - название старницы из URL
        $x = db::r("select * from seo where p='$p'");
        $sa = $x->sa;  // $sa - определение к чему относиться страница - сайту или админке
        switch ($sa) {

            case "site":
                include "site/a.php";
                include "site/$x->f";
                include "site/z.php";

                break;

            case "s":
                include "service/a.php";
                include "service/$x->f";
                include "service/z.php";
                break;

            default: include "404/404.php";
            //echo "Страница не найдена!";
        }    // end switch
    }

// end function route()

    public static function u() {
        $x = trim(strip_tags($_GET['route']));
        return explode("/", $x);
    }

// end function u()

    public static function ric($c) {
        $i = self::u()[0];
        if ($c == $i)
            echo 'style="color:#FF8C00;"';  // #00ff21
    }

    public static function ac($c) {
        $i = self::u()[1];
        if ($c == $i)
            echo "class='active'";
    }

    public static function p_i() {
        if (isset($_POST['i']))
            $i = trim(strip_tags($_POST['i']));
        else
            $i = 0;
        return $i;
    }

    public static function p_id() {
        if (isset($_POST['id']))
            $id = trim(strip_tags($_POST['id']));
        else
            $id = 0;
        return $id;
    }

}

// end class a