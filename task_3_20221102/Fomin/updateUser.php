<?php

use fominModels\DataBase;
use fominModels\User;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

session_start();

$db = new DataBase();

if ($_POST) {
    var_dump($_POST);
    $updateQuery = "UPDATE `users` SET `userForename` = '" .$_POST['newForename'] ."', `userSurename` = '" .$_POST['newSurename'] ."', `userMail` = '" .$_POST['newEmail'] ."' WHERE `id` = " .$_SESSION['user_id'];

    $db->updateRow($updateQuery);
    $_SESSION['user_name'] = $_POST['newForename'] ." ".$_POST['newSurename'];

    header('Location: index.php');
}
