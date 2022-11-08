<?php 

namespace library; 

class Book { 

	public $title; 
    public $genres; 
 
    public function __construct($title, $genres) 
 
    { 
        $this->title = $title; 
        $this->genres = $genres;
    } 

}