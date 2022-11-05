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
    $updateQuery = "UPDATE `users` SET `firstName` = '" .$_POST['newFirstName'] ."', `secondName` = '" .$_POST['newSecondName'] ."', `mail` = '" .$_POST['newMail'] ."' WHERE `id` = " .$_SESSION['user_id'];

    $db->updateRow($updateQuery);
    $_SESSION['user_name'] = $_POST['newFirstName'] ." ".$_POST['newSecondName'];

    header('Location: index.php');
}
