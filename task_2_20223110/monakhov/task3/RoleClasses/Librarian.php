<?php
include_once "User.php";

include_once "Interfaces/iLibrarian.php";

class Librarian extends User implements iLibrarian
{
    public function makeOrder($supplier, $orderList)
    {
        print("Библиотекарь $this->fName $this->lName заказал книги $orderList у поставщика $supplier->fName $supplier->lName");
    }
}

?>