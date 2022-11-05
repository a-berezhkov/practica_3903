<?php

namespace Models;

class BlogPost
{
    public $title;
    public $text;
    public $date;
    public $creator;

    public $db;

    /**
     * @param $title
     * @param $text
     * @param $date
     * @param $creator
     * @param $db
     */
    public function __construct($title, $text, $date, $creator, $db)
    {
        $this->title = $title;
        $this->text = $text;
        $this->date = $date;
        $this->creator = $creator;
        $this->db = $db;
    }

    /**
     * @param $title
     * @param $text
     * @param $date
     */


    public function save(){
        $insertQuery = "INSERT INTO `posts` (`id`, `title`, `text`, `date`, `creator`) VALUES (NULL, '$this->title', '$this->text', '$this->date', '$this->creator')";
        $this->db->addRow($insertQuery);

        return true;
    }

    public function getAll(){
        return $this->db->fetchAll("posts");
    }


}