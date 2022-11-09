<?php
class BookService{
    static function filterBookByGenre($books, $genre) //Объявляем функцию фильтрации по жанру
    {
        $filteredBooks = []; // объявлем пустой массив для будущих отфильтрованных книг
        for ($i = 0; $i < count($books); $i++) {
            $currentBook = (array)$books[$i]; // Текущая книга

            for ($j = 0; $j < count($currentBook['genre']); $j++) { // count - берем количество жанров

                if($currentBook['genre'][$j] instanceof $genre){ // Если жанр у книги равен искомому жанру, добавляем в массив filtered books
                    array_push($filteredBooks, $currentBook); // Добавляем в массив

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