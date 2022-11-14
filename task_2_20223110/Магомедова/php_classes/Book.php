<?php
namespace php_classes;
class Book
{private $Echo;
 public $tittle;
    protected $arr_genre = [];


    public function AddGenre($genre){
     array_push($this->arr_genre, $genre);
 }


 public function Arr_read(){
     echo 'Массив жанров книги: <br>';
     print_r($this->arr_genre);
 }

 public function check($object)
 {

     for ( $i =0; $i < count($this->arr_genre);  $i++) {
         if($this->arr_genre[$i] instanceof $object ==True)
             $this->Echo = 1;
     }
     if( $this->Echo == 1)
         echo 'У этой книги есть жанр ', $object .' !<br>';
     else
         echo 'У этой книги нет такого жанра!'.'<br>';
 }



}