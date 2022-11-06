<?php

class DataBase
{
    private mysqli $link;

    private $host;
    private $name;
    private $password;
    private $db_name;


    public function __construct($host, $name, $password, $db_name) {
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
        $this->db_name = $db_name;

        $this->link = new mysqli($this->host, $this->name, $this->password, $this->db_name);
    }


    //sql-запрос на получение всех записей из таблицы $table
    function fetchAll($table)
    {
        return $this->link->query("SELECT * FROM $table")->fetch_all();
    }


    //sql-запрос на получение всех записей из таблицы $table с условием
    function fetchAllWithConditions(string $table, $conditions):array
    {
        return $this->link->query("SELECT * FROM $table WHERE " .implode(' AND ', $conditions))->fetch_all();
    }


    //sql-запрос на получение одной записи из таблицы $table с условием
    function fetchOneWithCondition($table, $condition) :array {
        return $this->link->query("SELECT * FROM $table WHERE $condition")->fetch_assoc();
    }


}


$db = new DataBase("127.0.0.1", "root", "root", "task1");

$allPosts = $db->fetchAll("posts");
$allCondPosts = $db->fetchAllWithConditions("posts", ["header = 'Житель города Санкт-Петербург покусал собаку.'"]);
$oneWithCondPost = $db->fetchOneWithCondition("posts", "header = 'Житель города Москва вызвал на бой Хабиба Нурмагомедова.'");



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Task 1</title>
</head>
<body>
    <div class="posts">

        <?php
        foreach ($allPosts as $post) {
        ?>

            <div class="post">
                <p class="postName"><?= $post[1]?></p>
                <p class="postDesc"><?= $post[2]?></p>
                <p class="postText"><?= $post[3]?></p>
                <p class="postData"><?= $post[4]?></p>
            </div>

        <?php
        }
        ?>



        <?php
        foreach ($allCondPosts as $post) {
        ?>

            <div class="post">
                <p class="postName"><?= $post[1]?></p>
                <p class="postDesc"><?= $post[2]?></p>
                <p class="postText"><?= $post[3]?></p>
                <p class="postData"><?= $post[4]?></p>
            </div>

        <?php
        }
        ?>




    </div>
</body>
</html>