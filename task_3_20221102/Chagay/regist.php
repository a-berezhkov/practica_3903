<?php

namespace Chagay;

use Models\BlogDB;
use Models\UserClass;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

$db = new BlogDB();

if ($_POST) {
    $pass = md5($_POST['password']);

    $user = new UserClass($_POST['username'], $pass, $_POST['email'], $_POST['firstName'], $_POST['secondName']);
    $user->saveToDataBase($db);

    header('Location: index.php');
}

