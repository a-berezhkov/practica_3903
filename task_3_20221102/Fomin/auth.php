<?php

namespace Fomin;

use fominModels\DataBase;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

session_start();
$db = new DataBase();

if ($_POST) {
    $user = $db->fetchUser("`users`", ["username = '" .$_POST['username'] ."'", "userPassword = '" .md5($_POST['password']) ."'"]);

    /**
     * если fetchUser отработал и нашелся пользователь,
     * его данные записываются в глобальную пременную и производится редирект на главную
     */
    if (!empty($user)) {
        $_SESSION['user_id'] = $user["id"];
        $_SESSION['user_name'] = $user["userForename"] . " " .$user["userSurename"];

        // перенаправляем на страницу index.php
        header('Location: index.php');
    }
    else header('Location: loginPage.php');
}