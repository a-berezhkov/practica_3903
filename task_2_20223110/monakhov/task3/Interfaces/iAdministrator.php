<?php

interface iAdministrator
{
    public function overdueNotification($reader, $book);

    public function giveBook($reader, $book);
    public function findBook($reader, $book);
}

?>