<?php 
 
namespace library; 
     
class BookService { 

    public function filterBookByGenre() {
        var_dump($book->genres);
        var_dump($genre);
        foreach ($books as $book) {
            foreach ($book->genres as $genre) {
                if($genre instanceof $genres) {
                    var_dump($book);
                }
            }
        }
    }

}