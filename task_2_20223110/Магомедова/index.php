<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$a = new \php_classes\Book();
$a->tittle = "War and Piece";
$a->AddGenre(new \php_classes\Genre_litlle_classes\Detective());
$a->AddGenre( new \php_classes\Genre_litlle_classes\Fantastic());
$a->AddGenre( new \php_classes\Genre_litlle_classes\Novel());

// $a->genre = [Detective Object, Fantastic Object ]
$a->check(\php_classes\Genre_litlle_classes\Fantastic::class);
printf(sprintf("Название книги: <b>%s</b><br>", $a->tittle));
$a->Arr_read();
