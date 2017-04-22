 <?php
//session_start();
//header("Content-Type:text/html; charset=utf-8");
set_include_path(
	get_include_path()
	.PATH_SEPARATOR.'../core' 
	.PATH_SEPARATOR.'../site' 
	.PATH_SEPARATOR.'../service'
);

function __autoload($x) {
    include "$x.php";
}

//	 отправка почты с сайта

if (isset($_POST['email_form'])) {

    $f_name = trim(strip_tags($_POST['name']));
    $f_email = trim(strip_tags($_POST['email']));
    $f_text = trim(strip_tags($_POST['text']));

    $for_email = "academic.symphony.crimea@gmail.com , inetdollar@gmail.com";    //  academic.symphony.crimea@gmail.com
    $topic = "Сообщение с сайта http://black-sea-symphony.um.la";
    $message = "Сообщение с сайта http://black-sea-symphony.um.la." . "\r\n\n" . " Имя : " . $f_name . "\r\n\n" . " E-mail : " . $f_email . "\r\n\n" . " Текст сообщения : " . "\r\n" . $f_text;
    $headers = "Content-type: text/plain; charset=utf-8\r\n";

    $ok = mail($for_email, $topic, $message, $headers);

    if ($ok) {
        echo "<script>alert('Ваше сообщение успешно отправлено!');</script>";
        header("refresh:0; url=/contacts");
    };  // при смене хоста поменять url
}

//	 отправка почты с сайта
// включение и выключение сайта
if (isset($_POST['site_start'])) {
    $site = TRUE;
    db::e("update site set site='$site'");
    header("refresh:0; url=/service");
}
if (isset($_POST['site_off'])) {
    $site = FALSE;
    db::e("update site set site='$site'");
    header("refresh:0; url=/service");
}

// включение и выключение сайта
// добавление новой строки в таблицу
if (isset($_POST['add_row'])) {
    $i = a::p_i();
    $q = "insert into $i() value()";
    db::e($q);
    header("refresh:0; url=/service-$i");
}
// добавление новой строки в таблицу
// удаление строки в таблице
if (isset($_POST['del_row'])) {
    $i = a::p_i();
    $id = a::p_id();
    $q = "delete from $i  WHERE id=$id ";
    db::e($q);
    header("refresh:0; url=/service-$i");
}
// удаление строки в таблице
// редактирование строки в таблице
if (isset($_POST['edit_row'])) {
    $i = a::p_i();
    $id = a::p_id();
    header("refresh:0; url=/service-$i-edit/$id");
}
// редактирование строки в таблице
// Р Е Д А К Т И Р В А Н И Е  информации 


if (isset($_POST['new_foto'])) {
    $i = a::p_i();
    $id = a::p_id();
    f::up_f();
    header("refresh:0; url=/service-$i-edit/$id"); // service-users-edit/4
}

if (isset($_POST['edit_users'])) {

    a1::up();
    d::up();
    fu::up();
    a3::up();
    k::up();

    $i = a::p_i();
    header("refresh:0; url=/service-$i");
}

if (isset($_POST['edit_video'])) {

    a1::up();
    a4::up();
    a3::up();
    k::up();

    $i = a::p_i();
    header("refresh:0; url=/service-$i");
}

if (isset($_POST['edit_foto'])) {

    a1::up();
    a4::up();
    a3::up();
    a2::up();

    $i = a::p_i();
    header("refresh:0; url=/service-$i");
}

if (isset($_POST['edit_posters'])) {

    a1::up();
    a4::up();
    a3::up();
    img1::up();

    $i = a::p_i();
    header("refresh:0; url=/service-$i");
}


if (isset($_POST['edit_seo'])) {

    x1::up();
    x2::up();
    x3::up();
    p::up();
    f::up();
    sa::up();

    $i = a::p_i();
    header("refresh:0; url=/service-$i");
}


if (isset($_POST['preview'])) {

    img_m::up();

    $id = a::p_id();
    header("refresh:0; url=/service-posters-edit/$id");
}

if (isset($_POST['posters'])) {

    img_b::up();

    $id = a::p_id();
    header("refresh:0; url=/service-posters-edit/$id");
}


if (isset($_POST['preview_foto'])) {

    foto_m::up();

    $id = a::p_id();
    header("refresh:0; url=/service-foto-edit/$id");
}

if (isset($_POST['foto'])) {

    foto_b::up();

    $id = a::p_id();
    header("refresh:0; url=/service-foto-edit/$id");
}

// Р Е Д А К Т И Р В А Н И Е  информации 
// *************************    S E O   ********************************
if (isset($_POST['seo_site'])) {
    db::e("update site set s='site' where id=1");
    header("refresh:0; url=/service-seo");
}

if (isset($_POST['seo_s'])) {
    db::e("update site set s='s'  where id=1");
    header("refresh:0; url=/service-seo");
}

if (isset($_POST['seo_all'])) {
    db::e("update site set s='all'  where id=1");
    header("refresh:0; url=/service-seo");
}
// *************************    S E O   ********************************