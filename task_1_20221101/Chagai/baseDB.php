<?php
class baseDBSettings{
    static function getSettings(){
        $settings['hostname']="127.0.0.1";
        $settings['username']="root";
        $settings['password']="";
        $settings['database']="baseDB";

        return $settings;
    }
}

class baseDB extends baseDBSettings{
    private $link;
    private $result;
    private $connection;


    function __construct(){
        $settings=baseDBSettings::getSettings();

        $this->link=new mysqli($settings['hostname'],$settings['username'],$settings['password'],$settings['database']);
        
        
        /**
        Проверка на подключение к базе данных
         */
        if ($this->link->connect_error) {
            die('Ошибка подключения (' . $this->link->connect_errno . ') '
                . $this->link->connect_error);
        }
        
        echo '<p>Соединение установлено... ' . $this->link->host_info . "</p>";
        $result = $this->link->query("SHOW TABLES;");
        while ($row = $result->fetch_row()) {
            echo "<p>Таблица: {$row[0]}</p>";
}
    }

    public function selectAll($tableName): baseDB
    {
        $this->result = $this->connection->query("SELECT * FROM " . $tableName);
        return $this;
    }

    /**
     * @param $condition ["name == 3" ]
     */
    public function selectWhereAnd($tableName, $condition): baseDB
    {
        $this->result = $this->connection->query("SELECT * FROM " . $tableName . " where " . implode(' AND ', $condition));
        return $this;
    }
}
$a = new DB("localhost", "root", "", "test1");
var_dump($a->selectAll("countries")->getAll());
var_dump($a->selectWhereAnd("countries", ["name = 'Россия'"])->getAll());
