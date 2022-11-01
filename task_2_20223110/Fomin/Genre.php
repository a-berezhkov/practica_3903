<?php

class Genre
{
    public $genreTitle;
}

class GenreByContent extends Genre {
    public $bookSize = "bigh";
}

class Story extends GenreByContent {
    public $genreTitle = "Story";
}
class Novel extends GenreByContent {
    public $genreTitle = "Novel";
}
class Narrative extends GenreByContent {
    public $genreTitle = "Narrative";
}

class GenreByForm extends Genre {

}

class GenreByNumberOfPages extends Genre {

}

$book = new Story();

var_dump($book);