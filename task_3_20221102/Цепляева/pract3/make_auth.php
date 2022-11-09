<?php
session_start();

    $salt = '1sJg3hfdf';
    $login = filter_var(trim($_POST['login']));
    $pass = filter_var(md5($salt . $_POST['password'])); 

      
    $mysql = new mysqli("localhost", "root", "root", "test");
 
    
    $object = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$pass'")->fetch_object();
    $mysql->close();
    if( $object){
                $id= $object->id;
                $_SESSION['user_id'] = $id;
                header('Location: index.php');
    } else{

        header('Location: auth.php');
    }


   

   



?>