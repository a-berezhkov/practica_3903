<?php

class DB
{
    private $connection;
    private $result;

    /**
     * @param $host
     * @param string $username
     * @param string $password
     * @param $database
     */
    public function __construct($host, $username = "root", $password = "", $database)
    {
        $this->connection = new mysqli($host, $username, $password, $database);
    }

    /**
     * @param $tableName
     * @return $this
     */
    public function selectAll($tableName)
    {
        $this->result = $this->connection->query("SELECT * FROM " . $tableName);
        return $this;
    }

    /**
     * @param $condition ["name == 3" ]
     */
    public function selectWhereAnd($tableName, $condition)
    {
        $this->result = $this->connection->query("SELECT * FROM " . $tableName . " where " . implode(' AND ', $condition));
        return $this;
    }

    /**
     * Get data from table as Array
     * @return array
     */
    public function getAll()
    {
        $arr = [];
        while ($row = $this->result->fetch_assoc()) {
            array_push($arr, $row);
        }
        return $arr;
    }
}

$a = new DB("localhost", "root", "", "test1");
var_dump($a->selectAll("countries")->getAll());
var_dump($a->selectWhereAnd("countries", ["name = 'Россия'"])->getAll());


