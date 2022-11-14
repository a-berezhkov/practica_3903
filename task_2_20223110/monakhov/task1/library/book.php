<?php


class Book
{
	public $title;
	public $author;
	public $genres;
	public function __construct($title, $author, $genres){
		$this->title = $title;
		$this->author = $author;
		$this->genres = $genres;


	}
}





?>