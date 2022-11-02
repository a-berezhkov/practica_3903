<?php

namespace PHPClasses\GenresByContent;

class Story extends GenreByNumberOfPages
{

    public function __construct()
    {
        $this->genreTitle = "Story";
    }
}