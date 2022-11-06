<?php

class Genre
{
	public $genreName;

	

}



include_once "Genres/GroupOfGenres/GenreByNumberOfPages.php";
include_once "Genres/GroupOfGenres/GenreByForm.php";
include_once "Genres/GroupOfGenres/GenreByContent.php";
include_once "Genres/Story.php";
include_once "Genres/Novel.php";
include_once "Genres/Narrative.php";
include_once "Genres/Prose.php";
include_once "Genres/Verse.php";
include_once "Genres/Fantastic.php";
include_once "Genres/Detective.php";
include_once "Genres/Professional.php";



include_once "library/book.php";
include_once "library/BookService.php";


$book1 = new Book("Евгений Онегин", "А.С. Пушкин", [new Story(), new Verse()]);
$book2 = new Book("486 градусов по Фаренгейту", "Рей Бредбери", [new Story(), new Fantastic()]);
$book3 = new Book("10 негритят", "Агата Кристи", [new Novel(), new Detective()]);
$book4 = new Book("Загадка Эндхауза", "Агата Кристи", [new Novel(), new Detective()]);






$filter = new BookService();


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Task 1</title>
</head>
<body>
    <div class="books">

        <?php
        ?>

            <div class="book">
                <p><?= $filter->filterBookByGenre([$book1, $book2, $book3, $book4],  Novel::class)?></p>
            </div>


        <?php
        ?>

    </div>
</body>
</html>

