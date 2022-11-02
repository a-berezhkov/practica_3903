<?php
include "Book.php";
include "BookService.php";
class Genry {
    public $nameOfTitle;

    public function __construct($nameOfTitle)
    {
        $this->nameOfTitle = $nameOfTitle;
    }
}

class GenreByNumberOfPages extends Genry
    {

    }
class Story extends GenreByNumberOfPages
    {
    public function __construct()
        {
            $this->nameOfTitle = "Story";
    }
}
class Novel extends GenreByNumberOfPages
{
    public function __construct()
    {
        $this->nameOfTitle = "Novel";
    }
}
class Narrative extends GenreByNumberOfPages
{
    public function __construct()
    {
        $this->nameOfTitle = "Narrative";
    }
}
class GenreByForm extends Genry
{

}
class Prose extends GenreByForm
{
    public function __construct()
    {
        $this->nameOfTitle = "Prose";
    }
}
class Verse extends GenreByForm
{
    public function __construct()
    {
        $this->nameOfTitle = "Verse";
    }
}
class GenreByContent extends Genry
{

}
class Fantastic extends GenreByContent
{
    public function __construct()
    {
        $this->nameOfTitle = "Fantastic";
    }
}
class Detective extends GenreByContent
{
    public function __construct()
    {
        $this->nameOfTitle = "Detective";
    }
}
class PROFESSIONAL extends GenreByContent
{
    public function __construct()
    {
        $this->nameOfTitle = "PROFESSIONAL";
    }
}




$book1 = new Book("Genry", [new Detective(), new Narrative()]);
$book2 = new Book("Spoter", [new PROFESSIONAL]);
$book3 = new Book("Garryik", [new Fantastic(), new PROFESSIONAL(), new Story()]);

$arrayOfBooks = [$book1, $book2, $book3];

$arrayGenrys = [GenreByContent::class, GenreByForm::class, GenreByNumberOfPages::class];
$arrayGenry = [GenreByNumberOfPages::class];

$filtered = BookService::filterBookByGenre($arrayOfBooks, Detective::class);

foreach ($filtered as $book) {
    var_dump($book);
    echo "<br>";
}

