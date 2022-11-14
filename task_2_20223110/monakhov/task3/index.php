<?php

include_once "RoleClasses/Reader.php";
include_once "RoleClasses/Administrator.php";
include_once "RoleClasses/Librarian.php";
include_once "RoleClasses/Supplier.php";


$admin = new Administrator("Админ", "Михаил", "Зубенко", "qwerty123");
$reader = new Reader("Скорочтец", "Евгений", "Панасенков", "12345");
$librarian = new Librarian("Книговед", "Пётр", "Штерн", "00000");
$supplier = new Supplier("Достависта", "Артур", "Многоносов", "22222222");


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Task 3</title>
</head>
<body>
    <div class="library">

        <?php
        ?>

            <div class="user">
                <p><?= $reader->takeBook($admin, "'История России'")?></p>
            </div>

            <div class="user">
                <p><?= $admin->takeBook($admin, "'Бойцовский клуб'")?></p>
            </div>

            <div class="user">
                <p><?= $admin->overdueNotification($reader, "'История России'")?></p>
            </div>


            <div class="user">
                <p><?= $librarian->makeOrder($supplier, "'Милые кости', 'Ведьмак', 'История русского бунта'")?></p>
            </div>


            <div class="user">
                <p><?= $supplier->supplyLibrary($librarian, "'Защита от темных искусств'")?></p>
            </div>


        <?php
        ?>

    </div>
</body>
</html>