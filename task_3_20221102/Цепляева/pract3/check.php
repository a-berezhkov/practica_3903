<?php

    $salt = '1sJg3hfdf';
    $login = filter_var(trim($_POST['login']));
    $pass = filter_var(md5($salt . $_POST['password'])); 
    $email = filter_var(trim($_POST['email']));
    $fname = filter_var(trim($_POST['fname']));
    $lname = filter_var(trim($_POST['lname']));
/*
    if(mb_strlen($login) < 2 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 6) {
        echo "Недопустимая длина пароля (от 2 до 6 символов)";
        exit();
    } else if(mb_strlen($email) < 10 || mb_strlen($email) > 10) {
        echo "Недопустимая длина почты";
        exit();
    } else if(mb_strlen($fname) < 3 || mb_strlen($fname) > 50) {
        echo "Недопустимая длина фамилии";
        exit();
    } else if(mb_strlen($lname) < 3 || mb_strlen($lname) > 50) {
        echo "Недопустимая длина имени";
        exit();
    }
*/
    $mysql = new mysqli("localhost", "root", "root", "test");
    $mysql->query("INSERT INTO `user` (`login`, `password`, `email`, `fname`,  `lname` ) VALUES ('$login', '$pass', '$email', '$fname', '$lname')");
    $mysql->close();
   header('Location: auth.php');

?>
