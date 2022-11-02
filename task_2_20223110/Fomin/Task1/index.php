<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

use PHPClasses\GenresByContent\Detective;
use PHPClasses\GenresByContent\Professional;

$book = new \PHPClasses\Book();

$book->setBookTitle("Dick Mullen and the Mistaken Identity");
$book->AddGenre(new Detective());
$book->AddGenre(new Professional());

var_dump($book->genreList);
