<?php
    interface Reader
    {
        public function takeBook($administrator,$bookName);
        public function returnBook($administrator,$bookName);
        public function getName();
    }

    interface Librarian
    {
        public function orderBooks($supplier,$books);
    }

    interface Supplier
    {
        public function deliverBooks($librarian,$books);
    }

    interface Administrator
    {
        public function findBook($bookName);
        public function giveBook($reder, $bookName, $time);
        public function returnBook($reder, $bookName, $time);

    }

    class UserReader implements Reader {
        private $name; 
        public function __construct($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        public function takeBook($administrator,$bookName) {
            echo "Пользователь ". $this->name . " берет книгу " . $bookName,"<br>";
            $administrator->giveBook($this, $bookName, date("m.d.y H:i:s"));
        }

        public function returnBook($administrator,$bookName) {
            echo "Пользователь ". $this->name . " возвращает книгу " . $bookName,"<br>";
            $administrator->returnBook($this, $bookName, date("m.d.y H:i:s"));
        }

    }

    class UserAdministrator implements Administrator {
        private $name; 
        public function __construct($name) {
            $this->name = $name;
        }
        
        public function findBook($bookName) {
            echo "Администратор ". $this->name . " ищет книгу " . $bookName,"<br>";
        }
        public function giveBook($reader, $bookName, $time) {
            $this->findBook($bookName);
            echo "Администратор ". $this->name . " выдает книгу " . $bookName . " читателю ". $reader->getName() ." в " . $time,"<br>";
        }

        public function returnBook($administrator,$bookName, $time) {
            echo "Администратор ". $this->name . " принимает книгу " . $bookName . " в " . $time,"<br>";
        }

    }

    class UserLibrarian implements Librarian {
        private $name; 
        public function __construct($name) {
            $this->name = $name;
        }
        
        public function orderBooks($supplier,$books) {
            echo "Библиотекарь ". $this->name . " заказывает книги: ","<br>";
            echo '<pre>'; print_r($books); echo '</pre>';
            $supplier->deliverBooks($this, $books);
        }

    }

    class UserSupplier implements Supplier, Reader {
        private $name; 
        public function __construct($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        
        public function deliverBooks($librarian,$books) {
            echo "Поставщик ". $this->name . " доставляет книги: ","<br>";
            echo '<pre>'; print_r($books); echo '</pre>';
        }
        public function takeBook($administrator,$bookName) {
            echo "Пользователь ". $this->name . " берет книгу " . $bookName,"<br>";
            $administrator->giveBook($this, $bookName, date("m.d.y H:i:s"));
        }

        public function returnBook($administrator,$bookName) {
            echo "Пользователь ". $this->name . " возвращает книгу " . $bookName,"<br>";
            $administrator->returnBook($this, $bookName, date("m.d.y H:i:s"));
        }

    }

    $reader = new UserReader("Вася");
    $administrator = new UserAdministrator("Петя");
    $reader->takeBook($administrator,"букварь");
    $reader->returnBook($administrator,"мат анализ");

    $librarian = new UserLibrarian("Катя");
    $supplier = new UserSupplier("Владимир");
    $librarian->orderBooks($supplier,array("Гарри Поттер","Игра Эндера"));
    $supplier->takeBook($administrator,"Гарри Поттер");
    

?>