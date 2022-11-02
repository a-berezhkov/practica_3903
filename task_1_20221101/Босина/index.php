<?php
class DB {
    private  $host;
    private  $login;
    private  $pass;
    private  $name;

    public $connection;
    private $result;
/* создание класса*/
    /**
     * @param $host
     * @param $login
     * @param $pass
     * @param $name
     */
    public function __construct($host, $login, $pass, $name) /*объявляем функцию конструктора, которая принимает в себя в нашем случае пять параметров*/
    {
        $this->host = $host;
        $this->login= $login;
        $this->pass = $pass;
        $this->name = $name;

        $this->connection = new mysqli($this->host, $this->login, $this->pass, $this->name);
    }

    public function getAll($table) /*метод для выбора всех записей из таблицы*/
    {
        return $this->connection->query("select * from $table");
    }
    public function getOne($table,$string) /*метод для выбора всех записей из таблицы с условиями*/
    {
        return $this->connection->query("select * from $table" )->fetch_all(1)[0][$string];

    }
    public function getWhere($table, $where) /*метод для получения одной записи по условию*/
    {

        return $this->connection->query("select * from $table where name=$where")->fetch_all(MYSQLI_NUM)[0]; /*возвращаем значение*/
    }
}
$bos=new DB("localhost", "root", "", "name");
var_dump($bos->getOne("table1", "name")); /*вывод результата в зависимости от выбранного одного из трех методов обработки*/

