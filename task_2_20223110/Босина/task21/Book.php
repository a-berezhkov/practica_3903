<?php
class Book {
    public $title;
    public $genre;
    public function __construct($title, $genre)
    {
        $this->title = $title;
        $this->genre = $genre;
    }


    public function AddDescription($genre) {
        $this->genre = $genre;
    }
}
//
//class TaxType {
//    public double calculateTaxFor(double amount) {
//        // TODO override me!
//        return 0.0;
//    }
//}

//class TaxType {
// public function calculateTaxFor($amount) {
//      $sum = 0;
//
//      // $sum = $sum * 23;
//      return $sum;
//  }
}//