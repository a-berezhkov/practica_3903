<?php

namespace Fomin;

use fominModels\DataBase;
use fominModels\Post;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

session_start();

$db = new DataBase();

if ($_POST) {
    $post = new Post($_POST['postTitle'], $_POST['postText'], $_POST['postDate'], $_SESSION['user_name']);

    var_dump($post);

    $post->addPost($db);

    header('Location: index.php');

}