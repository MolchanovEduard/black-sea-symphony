<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php
        $p = trim(strip_tags(a::u()[0]));
        $x = db::r("select * from seo where p='$p'");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="ru" />
        <meta name="robots" content="all" />
        <meta name="description" content="<?= $x->x2; ?>" />
        <meta name="keywords" content="<?= $x->x3; ?>" />
        <meta name="author" content="Eduard Molchanov" />
        <title><?= $x->x1; ?></title>
        <link href="../css/site.min.css" type="text/css" rel="stylesheet" media="all" />
    </head>
    <body >
        <?php include "menu.php"; ?>
        <h1>Симфонический оркестр Крымской филармонии</h1>