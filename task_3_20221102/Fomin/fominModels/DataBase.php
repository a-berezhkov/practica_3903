<?php

namespace fominModels;

use mysqli;

class DatabaseSettings {

    /**
     * @return array
     */
    static function getSettings(): array
    {
        $settings['host'] = "localhost";
        $settings['userName'] = "root";
        $settings['password'] = "qwerty";
        $settings['dbName'] = "blog";

        return $settings;
    }
}

class DataBase extends DatabaseSettings
{
    private mysqli $link;

    /**
     *  конструктор, сначала получаем настройки базы данных, потом создаем подключение по этим настройкам
     */
    function __construct() {
        $settings = DatabaseSettings::getSettings();

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
    function fetchAll($tableName): ?array
    {
        return $this->link->query("SELECT * FROM $tableName")->fetch_all();
    }

    function fetchAllWithConditions(string $tableName, $conditions): array
    {
        return $this->link->query("SELECT * FROM $tableName WHERE " .implode(' AND ', $conditions))->fetch_all();
    }


    /**
     * @param $tableName
     * @param $condition
     * @return array
     */
    function fetchOneWithCondition($tableName, $condition) :?array {
        return $this->link->query("SELECT * FROM $tableName WHERE $condition")->fetch_assoc();
    }

    function fetchUser(string $tableName, $conditions): ?array
    {
        $findUserQuery = "SELECT * FROM $tableName WHERE " .implode(' AND ', $conditions);

        return $this->link->query($findUserQuery)->fetch_assoc();
    }

    function addRow($query) {
        $this->link->query($query);
    }
}