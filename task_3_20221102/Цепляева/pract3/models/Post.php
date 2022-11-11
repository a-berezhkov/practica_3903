<?php
namespace models;
require_once 'models/DB.php';


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
        $mysql = new mysqli("localhost", "root", "root", "test");
        $post_id = $_GET['id'];
        $post = $mysql->query("SELECT * FROM `posts` WHERE `id`='$post_id'")->fetch_assoc();

    }


}

?>