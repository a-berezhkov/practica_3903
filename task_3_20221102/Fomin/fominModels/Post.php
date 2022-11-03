<?php

namespace fominModels;

class Post
{
    public $postTitle;
    public $postText;
    public $postDate;
    public $postCreator;

    /**
     * @param $postTitle
     * @param $postText
     * @param $postDate
     * @param $postCreator
     */
    public function __construct($postTitle, $postText, $postDate, $postCreator)
    {
        $this->postTitle = $postTitle;
        $this->postText = $postText;
        $this->postDate = $postDate;
        $this->postCreator = $postCreator;
    }

    /**
     * @param DataBase $db
     * @return void
     *
     * формируем запрос и передаем его в базу
     */
    public function addPost(DataBase $db) {
        $quer = "INSERT INTO `posts` (`id`, `postTitle`, `postText`, `postDate`, `postCreator`) 
        VALUES (NULL, '$this->postTitle', '$this->postText', '$this->postDate', '$this->postCreator')";

        $db->addRow($quer);
    }

}