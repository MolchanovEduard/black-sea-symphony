<?php 
session_start();
header("Content-Type:text/html; charset=utf-8");
set_include_path(get_include_path().PATH_SEPARATOR.'../core'.PATH_SEPARATOR.site.PATH_SEPARATOR.service);
function __autoload($x) {
    include "$x.php"; 
}

$id=$_POST['id'];
$x=db::a("select * from posters where id =$id");

if(isset($_POST['af']))
echo json_encode($x);