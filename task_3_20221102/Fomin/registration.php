<?php

namespace Fomin;

use fominModels\DataBase;
use fominModels\User;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

$db = new DataBase();

session_start();

if ($_POST) {
    if ($_POST['password'] != $_POST['confirm-pass']) {
        header('Location: registrationPage.php');
    }
    else {
        $password = md5($_POST['password']);

        //формируем юзера
        $user = new User($_POST['username'], $password, $_POST['email'], $_POST['forename'], $_POST['surename']);

        /**
         * если юзер добавился в базу,
         * его данные записываются в глобальную пременную и производится редирект на главную
         */
        if (!empty($id = $user->saveToDataBase($db))){
            $_SESSION['user_id'] = $id["id"];
            $_SESSION['user_name'] = $id["userForename"] . " " .$id["userSurename"];
            // перенаправляем на страницу index.php
            header('Location: index.php');
        } else{
            header('Location: registrationPage.php');
        }
    }
}