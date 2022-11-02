<?php

namespace RoleClasses;

use Interfaces\iLibrarian;

class Librarian extends User implements iLibrarian
{
    public function makeOrder($supplier, $orderList)
    {
        echo "$this->realName ordered a $orderList from $supplier->realName | ";
    }
}