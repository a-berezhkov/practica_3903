<?php

namespace Interfaces;

interface iAdministrator
{
    public function overdueNotification($reader, $book);

    public function giveBook($reader, $book, $time);
}