<?php

$id = $_POST['id'];
$name = $_POST['name'];
$body = $_POST['body'];
$date = $_POST['date'];

$mysql = new mysqli("localhost", "root", "root", "test");
$mysql->query("UPDATE `posts` SET `name` = '$name', `body` = '$body', `date` = '$date' WHERE `id` = '$id'");

header('Location: index.php');
?>