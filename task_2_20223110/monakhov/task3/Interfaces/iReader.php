<?php

interface iReader
{
    public function takeBook($admin, $book);

    public function returnBook($admin, $book);

    public function findBook($admin, $book);
}

?>