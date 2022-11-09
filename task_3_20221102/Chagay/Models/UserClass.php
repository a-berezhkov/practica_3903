<?php

namespace Models;

class UserClass
{
    public $username;
    public $password;
    public $email;
    public $firstName;
    public $secondName;

    /**
     * @param $password
     * @param $username
     * @param $email
     * @param $firstName
     * @param $secondName
     */
    public function __construct($username, $password, $email, $firstName, $secondName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->secondName = $secondName;
    }


    public function getFullName(): string
    {
        return "$this->firstName" . $this->secondName;
    }

    public function saveToDataBase(BlogDB $blogDB){
        $insertQuery = "INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `secondName`, `mail`) VALUES (NULL, '$this->username', '$this->password', '$this->firstName', '$this->secondName', '$this->email')";

        $blogDB->addRow($insertQuery);

        return $blogDB->fetchOneWithCondition("users", "username = '$this->username'");
    }
}