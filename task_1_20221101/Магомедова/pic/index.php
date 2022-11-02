<?php
include_once "php/mysql.php";

$a = new sql();

printf("<br>" . "<b>Вся таблица</b>" );
$a->selectAll("raso");
$a->getAll();
printf("<br>" ."<br>" ."<br>" . "<b>выбор всех записей из таблицы с условиями( название таблицы, массив условий - параметры)</b>"  );

$a->selectAllByFilter();
$a->getAll();

printf("<br>" ."<br>" ."<br>" . "<b> выбор одной записи по условию)</b>" );

$a->selectOne(2);
$a->getAll();
?>
<br> NO NO

