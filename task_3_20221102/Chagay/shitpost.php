<?php

namespace Chagay;

use Models\BlogDB;
use Models\BlogPost;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

session_start();

$db = new BlogDB();

if ($_POST) {
    $post = new BlogPost($_POST['Title'], $_POST['Text'], $_POST['Date'], $_SESSION['user_name'], $db);

    if ($post->save()) {
        header('Location: index.php');
    }
    else header('Location: index.php');
}
