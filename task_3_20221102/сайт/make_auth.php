<?php
include "models/User.php";
if ($_POST){
    var_dump($_POST);
    var_dump($_POST['login']);
    // не забываем хахешировать пароль https://www.php.net/manual/ru/function.md5.php
    $password = md5($_POST['pass']);
    // Создаем объект пользователя, передав данные в консруктор
    $user = new \Models\User($password, $_POST['login'], NULL, NULL, NULL);
    var_dump($user);
    // Вызываем методв для сохранения класса User (который возвращает true| fasle
    if ( empty($id =$user->save())){
        $_SESSION['user_id'] = $id;
        // перенаправляем на страницу index.php
        // header('Location: index.php');
    } else{
        //header('Location: auth.php');
    }
}