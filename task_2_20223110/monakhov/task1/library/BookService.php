<?php


class BookService
{
	public function filterBookByGenre($Books, $genres){
		foreach ($Books as $book) {
			foreach ($book->genres as $genre ){
				if($genre instanceof $genres){
					
					print("Книга $book->title автора $book->author имеет жанр/ы $genres<br>");
				}
			}
			
		}
		
	}
}


?>