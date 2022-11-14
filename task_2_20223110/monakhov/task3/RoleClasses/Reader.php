<?php
include_once "User.php";
include_once "Interfaces/iReader.php";


class Reader extends User implements iReader
{
    public function takeBook($admin, $book)
    {
        print("Читатель $this->fName $this->lName взял книгу $book у админа $admin->fName $admin->lName");
    }

    public function returnBook($admin, $book)
    {
        print("Читатель $this->fName $this->lName вернул книгу $book админу $admin->fName $admin->lName");
    }

    public function findBook($admin, $book)
    {
        print("Администратор $this->fName $this->fName нашел книгу $book для читателя $reader->fName $reader->lName!");
    }
}

?>