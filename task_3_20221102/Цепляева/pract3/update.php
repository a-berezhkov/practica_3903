<?php

$mysql = new mysqli("localhost", "root", "root", "test");
$post_id = $_GET['id'];
$post = $mysql->query("SELECT * FROM `posts` WHERE `id`='$post_id'")->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Изменить пост</title>
</head>
<body>

  <a href="index.php">Главная</a>
  <hr>

  <h2>Изменить пост</h2>
  <form action="upd.php" method="POST">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    <p>Название</p>
    <input type="text" name="name" value="<?= $post['name'] ?>">
    <p>Название</p>
    <input type="text" name="body" value="<?= $post['body'] ?>">
    <p>Содержание</p>
    <input type="date" name="date" value="<?= $post['date'] ?>">
    <p>Дата</p>
    <button type="submit">Изменить</button>
  </form>
  
</body>
</html>