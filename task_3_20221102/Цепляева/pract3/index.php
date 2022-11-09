<?php 
session_start();
 
?>

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
    <link rel="stylesheet" href="style.css">
    <title>Главная страниц</title>
</head>
<body>

<?php
$mysql = new mysqli("localhost", "root", "root", "test");
$posts = $mysql->query("SELECT * FROM `posts`")->fetch_all();



?>
<table>
	<tr>
        <th>№</th>
        <th>Пост</th>
		<th>Содержание</th>
		<th>Дата</th>
		<th>&#9998;</th>
		<th>&#10006;</th>
	</tr>
	<?php foreach ($posts as $post) {?>
	<tr>
        <td><?=$post[0]?></td>
		<td><?=$post[1]?></td>
		<td><?=$post[2]?></td>
		<td><?=$post[3]?></td>
		<td><a href="update.php?id=<?= $post[0] ?>">Редактировать</a></td>
		<td><a href="delete.php?id=<?= $post[0] ?>">Удалить</a></td>
	</tr><?php } ?>
</table>


    <h3>Добавить новый пост</h3>
        <form action="create.php" method="POST">
            <p>Название</p>
            <input type="text" name="name">
            <p>Содержание</p>
            <input type="text" name="body">
            <p>Дата</p>
            <input type="date" name="date">
            <button type="submit">Добавить</button>
        </form>
</body>
</html>