<?php

namespace models;

class User
{
    public $password;
    public $username;
    public $email;
    public $fname;
    public $lname;

    /**
     * @param $password
     * @param $username
     * @param $email
     * @param $fname
     * @param $lname
     */
    public function __construct($password, $username, $email, $fname, $lname)
    {
        $this->password = $password;
        $this->username = $username;
        $this->email = $email;
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function getFullName()
    {
        return $this->fname . " " . $this->lname;
    }

    public function save(){
        // Сохраняет пользователя
        // return user id | null
        return 12;
    }


}