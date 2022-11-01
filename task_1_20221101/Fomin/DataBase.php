<?php

class DBSettings {

    /**
     * @return array
     */
    static function getSettings() {
        $settings['host'] = "127.0.0.1";
        $settings['userName'] = "root";
        $settings['password'] = "";
        $settings['dbName'] = "posts";

        return $settings;
    }
}

class DataBase extends DBSettings
{
    private  $link;


    /**
     *  конструктор, сначала получаем настройки базы данных, потом создаем подключение по этим настройкам
     */
    function __construct() {
        $settings = DBSettings::getSettings();

        $this->link = new mysqli($settings['host'], $settings['userName'], $settings['password'], $settings['dbName']);
    }

    //проверка, есть ли подключение к базе данных
    public function isConnected()
    {
        if ($this->link->connect_error) {
            var_dump("Not connected". $this->link->connect_error);
            exit();
        }
        else var_dump("Connected");
    }

    /**
     * @param $tableName
     * @return array | null
     */
    function fetchAll($tableName) {
        return $this->link->query("SELECT * FROM $tableName")->fetch_all();
    }

    function fetchAllWithConditions(string $tableName, $conditions) {
        return $this->link->query("SELECT * FROM $tableName WHERE " .implode(' AND ', $conditions))->fetch_all();
    }

    /**
     * @param $tableName
     * @param $condition
     * @return array|null
     */
    function fetchOneWithCondition($tableName, $condition) :array {
        return $this->link->query("SELECT * FROM $tableName WHERE $condition")->fetch_assoc();
    }
}

$db = new DataBase();

$allPosts = $db->fetchAll("posts");
$condPosts = $db->fetchAllWithConditions("posts", ["posterName = 'Sanya'"]);
$condPost = $db->fetchOneWithCondition("posts", "posterName = 'Sanya'");

//var_dump($condPost);
//var_dump($db->fetchAll("posts"));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="posts">

        <!-- COMMENT/UNCOMMENT TO SEE DIFF-->
        <?php foreach ($allPosts as $post) {?>
            <div class="post">
                <p class="poster-name"><?= $post[1]?></p>
                <p class="post-text"><?= $post[2]?></p>
                <p class="post-data"><?= $post[3]?></p>
            </div>
        <?php }?>

<!--        --><?php //foreach ($condPosts as $post) {?>
<!--            <div class="post">-->
<!--                <p class="poster-name">--><?//= $post[1]?><!--</p>-->
<!--                <p class="post-text">--><?//= $post[2]?><!--</p>-->
<!--                <p class="post-data">--><?//= $post[3]?><!--</p>-->
<!--            </div>-->
<!--        --><?php //}?>
<!---->
<!--        <div class="post">-->
<!--            <p class="poster-name">--><?//= $condPost['posterName']?><!--</p>-->
<!--            <p class="post-text">--><?//= $condPost['postText']?><!--</p>-->
<!--            <p class="post-data">--><?//= $condPost['postDate']?><!--</p>-->
<!--        </div>-->
    </div>
</body>
</html>
