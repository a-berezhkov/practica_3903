<?php

namespace RoleClasses;

use Interfaces\iReader;

class Reader extends User implements iReader
{
    public function takeBook($admin, $book)
    {
        echo "$this->realName has taken $book from $admin->realName | ";
    }

    public function returnBook($admin, $book)
    {
        echo "Reader $this->realName has returned $book to Admin $admin->realName | ";
    }
}

