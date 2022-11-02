<?php

namespace models;

class Post
{
    public $name;
    public $body;
    public $date;
    private $db;

    /**
     * @param $name
     * @param $body
     * @param $date
     */
    public function __construct($name, $body, $date)
    {
        $this->db = DB::connect();
        $this->name = $name;
        $this->body = $body;
        $this->date = $date;
    }

    public function save(){

        /// здесь sql для сохранения
        /// return true|false
    }

    public static function getAll(){
        /// здесь sql для получения всех записией
        /// ex. $this->db->query()........
        /// return array
    }


}