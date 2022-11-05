<?php session_start() ?>
<?php /*if (!isset($_SESSION['user_id'])) {
    header('Location: auth.php');
} */?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/Main.css">
    <title>Главная страница</title>
</head>
<body>
<header>
<?php include_once "php_pages_structure/Header.php"?>
</header>
<?php
Echo "Страница Индекс";
?>
/*$posts = \Models\Post::getAll();
foreach ($posts as $post){
    ///вывод поста*/
}

?>
<?php include_once "php_pages_structure/Footer.php"?>
</body>
</html>