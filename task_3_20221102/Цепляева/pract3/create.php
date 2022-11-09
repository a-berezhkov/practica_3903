<?php

$name = $_POST['name'];
$body = $_POST['body'];
$date = $_POST['date'];

$mysql = new mysqli("localhost", "root", "root", "test");
$mysql->query("INSERT INTO `posts` (`id`, `name`, `body`, `date`) VALUES (NULL, '$name', '$body', '$date')");

header('Location: index.php');

?>
