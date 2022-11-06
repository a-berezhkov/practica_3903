<?php


class User
{
    public $userName;
    public $fName;
    public $lName;

    private $password;

    public function __construct($userName, $fName, $lName, $password)
    {
        $this->userName = $userName;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->password = $password;
    }
}

?>