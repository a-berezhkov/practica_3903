<?php

namespace RoleClasses;

use Interfaces\iAdministrator;
use Interfaces\iReader;

class Administrator extends User implements iAdministrator, iReader
{

    public function overdueNotification($reader, $book)
    {
        echo "Dear $reader->realName, please return $book ASAP! | ";
    }

    public function giveBook($reader, $book, $time)
    {
        echo "Admin $this->realName gave reader $reader->realName a $book on $time | ";
    }

    public function takeBook($admin, $book)
    {
        echo "Admin $this->realName has taken $book! | ";
    }

    public function returnBook($admin, $book)
    {
        echo "Admin $this->realName has returned $book! | ";
    }
}