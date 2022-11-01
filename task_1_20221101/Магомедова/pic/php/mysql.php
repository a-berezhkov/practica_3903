<?php
header('Content-type: text/html; charset=utf-8'); // чтоб руское читалось

//1. выбор всех записей из таблицы название табицы - параметр
//1. выбор всех записей из таблицы с условиями( название таблицы, массив условий - параметры)
//1. выбор одной записи по условию

class sql{

    private $connection;
    private $result;


    /**
     * @param $connection;
     * @param $result;
     */

    public function __construct(){
        $this->connection = $connection = new mysqli("localhost", "root", "", "magomedova39_03_uchPr");
        if($connection->connect_error){
            die("Connection failed:" . $connection->connect_error);
        }
        else(printf("ooooh yeeeees мы подключились к бд"));
    }



    /**
     *@param $tableName;
     */
    public function selectAll($tableName)
    {
        $this->result = $this->connection->query("SELECT * FROM $tableName");
    }

    public function selectAllByFilter()
    {
        $Name = 'Философия';
        $Corp = 1;
        $this->result = $this->connection->query("SELECT * FROM raso WHERE Name='$Name' AND Corpus=$Corp");
    }

    public function selectOne($id)
    {
        $this->result = $this->connection->query("SELECT * FROM `raso` WHERE Npar=$id");
    }


    public function getAll()
    {
        $rows = mysqli_fetch_all($this->result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            print("<br>" . "№Пары: " . $row['Npar'] . "; Предмет: " . $row['Name']);
        }
    }
}
