<?php

namespace RoleClasses;

use Interfaces\iSupplier;

class Supplier extends User implements iSupplier
{

    public function supplyLibrary($librarian, $books)
    {
        echo "Supplier $this->realName delivered $books to $librarian->realName | ";
    }
}