<?php

$id = $_GET['id'];
$mysql = new mysqli("localhost", "root", "root", "test");
$mysql->query("DELETE FROM `posts` WHERE `id` = '$id'");

header('Location: index.php');

?>