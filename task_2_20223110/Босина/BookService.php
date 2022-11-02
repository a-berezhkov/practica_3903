<?php
class BookService{
    static function filterBookByGenre($books, $genre)
    {
        $filteredBooks = [];
        for ($i = 0; $i < count($books); $i++) {
            $currentBook = (array)$books[$i];

            for ($j = 0; $j < count($currentBook['genre']); $j++) {

                if($currentBook['genre'][$j] instanceof $genre){
                    array_push($filteredBooks, $currentBook);

                }

            }

        }
        if (count($filteredBooks) == 0) {
            return ['Книги с таким жанром не существует'];
        } else {
            return $filteredBooks;
        }

    }
}
?>