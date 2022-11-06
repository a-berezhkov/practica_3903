<?php
include_once "User.php";
include_once "Interfaces/iSupplier.php";
include_once "Interfaces/iLibrarian.php";

class Supplier extends User implements iSupplier, iLibrarian
{

    public function supplyLibrary($librarian, $books)
    {
    	print("Поставщик $this->fName $this->lName принес книгу $books для библиотекаря $librarian->fName $librarian->lName");
    }

    public function makeOrder($supplier, $orderList)
    {
        print("$this->fName ordered a $orderList from $supplier->fName $supplier->lName");
    }
}

?>