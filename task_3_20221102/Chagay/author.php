<?php

namespace Chagay;

use Models\BlogDB;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

session_start();
$db = new BlogDB();

if ($_POST) {
    $user = $db->fetchUser("`users`", ["username = '" .$_POST['username'] ."'", "password = '" .md5($_POST['password']) ."'"]);
    var_dump($user);

    if (!empty($user)) {
        $_SESSION['user_id'] = $user["id"];
        $_SESSION['user_name'] = $user["firstName"] . " " .$user["secondName"];

        // перенаправляем на страницу index.php
        header('Location: index.php');
    }
    else header('Location: loginPage.php');
}