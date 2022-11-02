<?php

namespace Interfaces;

interface iReader
{
    public function takeBook($admin, $book);

    public function returnBook($admin, $book);
}