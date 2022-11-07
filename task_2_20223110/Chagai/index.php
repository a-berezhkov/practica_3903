<?php

namespace Chagai;

use Classes\Book;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$book = new Book();
var_dump($book);