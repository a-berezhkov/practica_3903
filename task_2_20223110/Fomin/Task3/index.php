<?php

namespace Task3;

use RoleClasses\Administrator;
use RoleClasses\Librarian;
use RoleClasses\Reader;
use RoleClasses\Supplier;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

$admin = new Administrator("qwert", "Sanya", "qwert");
$reader = new Reader("QWER", "Petya", "qwerrt");
$librarian = new Librarian("QWERr", "Danya", "qwerrtr");
$supplier = new Supplier("QWERda", "Valya", "qwerrtfe");

$reader->takeBook($admin, "Harry Potter");
$admin->takeBook($admin, "Game of Thrones");

$admin->overdueNotification($reader, "Harry Potter");

$librarian->makeOrder($supplier, "Dick Mullen's History, Ice n Fire");

$supplier->supplyLibrary($librarian, "History, Physics");