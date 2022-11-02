<?php
namespace PHPClasses;

class Book
{
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
    public $genre;

    public $genreList = [];

    public function AddGenre($genre) {
        array_push($this->genreList, $genre);
    }
}