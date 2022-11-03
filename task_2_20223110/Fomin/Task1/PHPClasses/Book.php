<?php
namespace PHPClasses;

class Book
{
    public $genre;
    public $genreList = [];

    private $bookTitle;

    /**
     * @return mixed
     */
    public function getBookTitle()
    {
        return $this->bookTitle;
    }
    /**
     * @param mixed $bookTitle
     */
    public function setBookTitle($bookTitle): void
    {
        $this->bookTitle = $bookTitle;
    }

    public function AddGenre($genre) {
        array_push($this->genreList, $genre);
    }
}