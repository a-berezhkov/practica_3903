<?php

namespace Models;

use mysqli;

class DatabaseSettings {

    /**
     * @return array
     */
    static function getSettings(): array
    {
        $settings['host'] = "localhost";
        $settings['userName'] = "root";
        $settings['password'] = "root";
        $settings['dbName'] = "blog";

        return $settings;
    }
}

class BlogDB extends DatabaseSettings
{
    private mysqli $link;

    function __construct() {
        $settings = DatabaseSettings::getSettings();

        $this->link = new mysqli($settings['host'], $settings['userName'], $settings['password'], $settings['dbName']);
    }

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

    /**
     * @param $tableName
     * @param $condition
     * @return array
     */
    function fetchOneWithCondition($tableName, $condition) :?array {
        return $this->link->query("SELECT * FROM $tableName WHERE $condition")->fetch_assoc();
    }

    /**
     * @param string $tableName
     * @param $conditions
     * @return array|null
     */
    function fetchUser(string $tableName, $conditions): ?array
    {
        $findUserQuery = "SELECT * FROM $tableName WHERE " .implode(' AND ', $conditions);

        return $this->link->query($findUserQuery)->fetch_assoc();
    }

    function addRow($query) {
        $this->link->query($query);
    }

    function updateRow($query) {
        $this->link->query($query);
    }
}
