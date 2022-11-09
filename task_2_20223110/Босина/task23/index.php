<?php
class User
{
    public $userName;
    public $realName;
    public function __construct($userName, $realName, $password)
    {
        $this->userName = $userName;
        $this->realName = $realName;
        $this->password = $password;
    }
}
class Book {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

interface IReader {
    public function takeBooks($admin, $book);
    public function returnBooks($admin, $book);
}

class Reader extends User implements IReader
{
    public function takeBooks($admin, $book){
        echo "$this->realName выдал книгу с названием $book для $admin->realName | ";
    }
    public function returnBooks($admin, $book){
        echo "Читатель $this->realName вернул $book администратору $admin->realName | ";
    }
}

interface ILibrarian {
    public function orderBooks($supplier, $orderList);
}

class Librarian extends User implements iLibrarian
{
    public function orderBooks($supplier, $orderList){
        echo "$this->realName выдал за огромные деньжищи книгу $orderList для $supplier->realName | ";
    }
}

interface ISupplier {
    public function supplyBooks($librarian, $books);
}

class Supplier extends User implements ISupplier
{
    public function supplyBooks($librarian, $books){
        echo "Поставщик $this->realName поставил книги $books для $librarian->realName | ";
    }
}

interface IAdministrator {
    public function findAndNoticeBooks($reader, $book);
    public function giveBooks($reader, $book, $time);
}

class Administrator extends User implements iAdministrator, iReader
{
    public function findAndNoticeBooks($reader, $book){
        echo "$reader->realName, ты с ума сошел??? Быстро верни книгу $book или получишь по голове! | ";
    }
    public function giveBooks($reader, $book, $time){
        echo "Администратор $this->realName по доброте душевной выдал $reader->realName книгу $book в это время: $time | ";
    }
    public function takeBooks($admin, $book)
    {
        echo "Администратор $this->realName взял вот эту книгу: $book. | ";
    }

    public function returnBooks($admin, $book)
    {
        echo "Администратор $this->realName вернул $book. | ";
    }
}
$admin = new Administrator("qwert", "Ваня Третьяк", "qwert");
$reader = new Reader("QWER", "Леша Овчинников", "qwerrt");
$librarian = new Librarian("QWERr", "Русланчик", "qwerrtr");
$supplier = new Supplier("QWERda", "Стасик", "qwerrtfe");

$reader->takeBooks($admin, "Турбо-суслик");
$admin->takeBooks($admin, "Как управлять рабами");

$admin->findAndNoticeBooks($reader, "Старый шлюпик");

$librarian->orderBooks($supplier, "Танцуй как Иисус");

$supplier->supplyBooks($librarian, "Кальян из велосипедного насоса и Хищные грибы-друзья человека");


