<?php

namespace Classes;

class Book
{
    protected $bookTitle;


    public function getBookTitle()
    {
        return$this->bookTitle;
    }


    /**
     * @param mixed $bookTitle
     */
    public function setBookTitle($bookTitle): void
    {
        $this->bookTitle = $bookTitle;
    }

    public $genre;
    public array $genreList=[];

    public function AddGenre($genre){
        array_push($this->genreList,$genre);
    }
}