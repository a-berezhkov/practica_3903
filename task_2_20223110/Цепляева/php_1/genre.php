<?php 

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

use library\book;
use library\BookService;

class Genre { 
 
    public $genreTitle;
 
    function __construct($genreTitle) 
    { 
        $this->genreTitle = $genreTitle; 
    } 
     
 } 
 
 
class GenreByContent extends Genre { 

} 
 
 
class Story extends GenreByContent { 
    public function __construct()
    {
        $this->genreTitle = "Story";
    }

} 
 
 
class Novel extends GenreByContent { 
    public function __construct()
    {
        $this->genreTitle = "Novel";
    }
} 
 
 
class Narrative extends GenreByContent { 
  public function __construct()
    {
        $this->genreTitle = "Narrative";
    }
} 
 
 
class GenreByForm extends Genre { 
 
 } 
 
 
 class Prose extends GenreByForm { 
    public function __construct()
    {
        $this->genreTitle = "Prose";
    }

 } 
 
 
 class Verse extends GenreByForm { 
 
    public function __construct()
    {
        $this->genreTitle = "Verse";
    }

 
 } 
 
 
 class GenreByNumberOfPages extends Genre {  
      
} 
 
class Fantastic extends GenreByNumberOfPages { 

     public function __construct()
    {
        $this->genreTitle = "Fantastic";
    }
 
 } 
 
 class Detective extends GenreByNumberOfPages { 
 
     public function __construct()
    {
        $this->genreTitle = "Detective";
    }

 
 } 
 
 
 class Professional extends GenreByNumberOfPages { 
 
     public function __construct()
    {
        $this->genreTitle = "Professional";
    }

 
 } 

 
$book1 = new Book("Гарри Поттер", [new Narrative(), new Fantastic()]);
$book2 = new Book("Шерлок Холмс", [new Novel(), new Detective()]);
$book3 = new Book("Евгений Онегин", [new Novel(), new Verse()]);

var_dump($book1);
echo "<br>";
var_dump($book2);
echo "<br>";
var_dump($book3);

?>


