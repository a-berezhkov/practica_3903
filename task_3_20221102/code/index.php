<?php session_start() ?>
<?php if (!isset($_SESSION['user_id'])) {
    header('Location: auth.php');
} ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>

<?php
$posts = \models\Post::getAll();
foreach ($posts as $post){
    ///вывод поста
}

?>

</body>
</html>