<?php

namespace fominModels;

class User
{
    private $username;
    private $userPassword;

    public $userMail;

    public $userForename;
    public $userSurname;

    /**
     * @param $username
     * @param $userPassword
     * @param $userMail
     * @param $userForename
     * @param $userSurname
     */
    public function __construct($username, $userPassword, $userMail, $userForename, $userSurname)
    {
        $this->username = $username;
        $this->userPassword = $userPassword;
        $this->userMail = $userMail;
        $this->userForename = $userForename;
        $this->userSurname = $userSurname;
    }

    /**
     * @return string
     */
    public function getUserFullName()
    {
        return "$this->userForename " .$this->userSurname;
    }

    public function saveToDataBase(DataBase $db) {
        $quer = "INSERT INTO `users` (`id`, `username`, `userPassword`, `userForename`, `userSurename`, `userMail`) VALUES (NULL, '$this->username', '$this->userPassword', '$this->userForename', '$this->userSurname', '$this->userMail')";

        $db->addUser($quer);

        $id = $db->fetchOneWithCondition("users", "userName = '$this->username'");
        return $id["id"];
    }
}