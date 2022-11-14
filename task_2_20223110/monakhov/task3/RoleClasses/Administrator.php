<?php
include_once "User.php";

include_once "Interfaces/iAdministrator.php";
include_once "Interfaces/iReader.php";

class Administrator extends User implements iAdministrator, iReader
{

    public function overdueNotification($reader, $book)
    {
        print("$reader->fName $reader->lName, пожалуйста, верните книгу $book!");
    }

    public function giveBook($reader, $book)
    {
        print("Администратор $this->fName $this->lName выдал читателю $reader->fName $reader->lName книгу $book");
    }

    public function takeBook($admin, $book)
    {
        print("Администратор $this->fName $this->fName принял книгу $book!");
    }

    public function returnBook($admin, $book)
    {
        print("Администратор $this->fName $this->fName вернул книгу $book!");
    }

    public function findBook($reader, $book)
    {
        print("Администратор $this->fName $this->fName нашел книгу $book для читателя $reader->fName $reader->lName!");
    }
}

?>