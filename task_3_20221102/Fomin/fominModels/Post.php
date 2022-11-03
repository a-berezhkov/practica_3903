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

    public function addPost() {
        ///
    }

}