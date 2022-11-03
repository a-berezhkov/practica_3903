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
    $password = md5($_POST['password']);

    $user = new User($_POST['username'], $_POST['password'], $_POST['email'], $_POST['forename'], $_POST['surename']);

    if (!empty($id = $user->saveToDataBase($db))){
        $_SESSION['user_id'] = $id;
        // перенаправляем на страницу index.php
        header('Location: index.php');
    } else{
        header('Location: registrationPage.php');
    }
}