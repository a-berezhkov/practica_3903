<?php
namespace php_classes;
class Book
{
 public $tittle;
    protected $arr_genre = [];
    private $genre;

    public function AddGenre($genre){
     array_push($this->arr_genre, $genre);
 }


 public function Arr_read(){
     print_r($this->arr_genre);
 }

 public function check($object)
 {
     /// $genre
     // if (i < длинна масиива; i =0; i++){
     //     if ($genre[i] $a instanceof $object == True){echo "У этой книги есть такой жанр!"}
     //}else{echo "У этой книги нет такого жанра!"}
     
 }



}