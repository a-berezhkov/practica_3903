<?php

namespace RoleClasses;

class User
{
    public $userName;
    public $realName;

    private $password;

    /**
     * @param $userName
     * @param $realName
     * @param $password
     */
    public function __construct($userName, $realName, $password)
    {
        $this->userName = $userName;
        $this->realName = $realName;
        $this->password = $password;
    }
}