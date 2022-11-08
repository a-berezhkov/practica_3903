<?php

class DB
{
    private $connection;
    private $result;
   

    public function __construct($host, $username = "root", $password = "", $database) //подключение к бд
    {
        $this->connection = new mysqli($host, $username, $password, $database);
    }

   
    public function selectAll($tableName) // функция выбора всех записей
    {
        $this->result = $this->connection->query("SELECT * FROM  $tableName");
        return $this;
    }

    public function selectWhereAnd($tableName, $condition) // функция выбора всех записей с условием
    {
        $this->result = $this->connection->query("SELECT * FROM " . $tableName . " where " . implode(' AND ', $condition));
        return $this;
    }


    public function getAll() //функция вывода всех данных
    {
        $arr = [];
        while ($row = $this->result->fetch_assoc()) {
            array_push($arr, $row);
        }
        return $arr;
    }


    public function getOne() //функция вывода одной записи
    {
        $arr = [];
        while ($row = $this->result->fetch_all()[1]) {
            array_push($arr, $row);
        }
        return $arr;
    }
  
}

    $a = new DB("localhost", "root", "", "php1"); // создание переменной с данными нашей бд
    var_dump($a->selectAll("parametr")->getAll()); //вывод всех записей нашей бд
    var_dump($a->selectWhereAnd("parametr", ["description = 'very smart, not me'"])->getAll()); //вывод всех записей с условием нашей бд
    var_dump($a->selectWhereAnd("parametr", ["count = '123'"])->getOne()); //вывод одной записи с условием нашей бд

?>