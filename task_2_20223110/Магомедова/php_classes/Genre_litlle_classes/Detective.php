<?php
namespace php_classes\Genre_litlle_classes;

use php_classes\GenreByContent;

class Detective extends GenreByContent
{

    /**
     * @var array
     */
   

    public function __construct(){
        $genre = "detective";
    }
    public function let(){
        return "detective";
    }



}